<?php
namespace App\Controllers;
Use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller{

	public function __construct(){
		helper(['form', 'url']);
	}
	public function create() {

		$dato['titulo']='Registro';
		echo view('front/head_view',$dato);
		echo view('front/nav_view',);
		echo view('back/usuario/registrar',);
		echo view('front/footer_view',);
	}
	public function formValidation() {

		$input = $this->validate([
			'nombre' => 'required|min_length[3]',
			'apellido' => 'required|min_length[3]|max_length[25]',
			'usuario' => 'required|min_length[3]',
			'email' => 'required|min_length[4]|max_length[100]|valid_emails|is_unique[usuarios.email]',
			'pass' => 'required|min_length[4]|max_length[10]',
			],
		);
		//formModel es la estancia del Modelo/tabla
		//usuario_Model es el mismo nombre del Modelo/tabla creada en la base de dato donde se almacena 
		//la información de usuario
		$formModel = new usuario_Model();

		if (!$input){
			$data['titulo']='Registro';
			echo view('front/head_view',$data);
			echo view('front/nav_view');
			echo view('back/usuarios/registrar',['validation' => $this->validator]);
			echo view('front/footer_view');
			//'validation' => $this-validator es un método de validación
		} else {
			//formModel es la estancia del Modelo/tabla
			//Estas líneas sirven para almacenar la información de usuario. Lo que trae del formulario
			//es lo que está dentro getVar('abcd'), por lo tanto el argumento debe coincidir con el
			//nombre que le asignamos a cada respectiva variable. Además, estos nombres asignados, deben
			//coincidir con los nombres de las variables asignados en el archivo registro.php
			$formModel->save([
				'nombre' => $this->request->getVar('nombre');
				'apellido' => $this->request->getVar('apellido');
				'usuario' => $this->request->getVar('usuario');
				'email' => $this->request->getVar('email');
				'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT);
				//password_hash() crea un nuevo hash de contraseña usando un algoritmo 
				//hash de único sentido, es decir, que solo encripta. Además, de validar 
				//el password.
				]);

			//Flashdata funciona solo en redirigir la función en el controlador en la vista de carga.
			//También, sirve para enviar mensajes de error o éxito. 
			session()->setFlashdata('success','Usuario registrado con exito');
			//La siguiente línea redirecciona a login si se cumple con todo, por lo tanto el mensaje
			//es observado en el login
			return $this->response->redirect('/acceder');
		}
	}	
}

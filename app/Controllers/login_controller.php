<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;

class login_controller extends BaseController
{
	public function index()
	{
		helper(['form', 'url']);

		$dato['titulo']='Acceder';
		echo view('front/head_view',$dato);
		echo view('front/navbar_view');
		echo view('back/usuarios/acceder');
		echo view('front/footer_view');
	}

	// auth es la función autorización
	public function auth()
	{
		$session = session(); //crea id de usuario cuando inicia sesión y se elimina cuando cierra 
		$model = new usuario_Model();
		//traemos los datos del formulario
		$email = $this->request->getVar('email');
		$password = $this->request->getVar('pass'); 
		// Compara $email con el de la tabla del Modelo y traiga la primera coincidencia (first())
		// para verificar si existe el usuario, como primer verificación
		$data = $model->where('email',$email)->first();
		if($data){
			$pass = $data['pass'];
			$ba = $data['baja'];
			if ($ba == 'SI'){
				$session->setFlashdata('msg', 'usuario dado de baja');
				return redirect()->to('/login_controller');
			}
			//Se verifica los datos ingresados para iniciar, si cumple la verificación inicia la sesion
			$verify_pass = password_verify($password, $pass);
			//password_verify determina los requisitos de configuración de la contraseña
			if($verify_pass){
				//verifica información con la tabla del modelo
				$ses_data = [
					'id_usuario' => $data['id_usuario'],
					'nombre' => $data['nombre'],
					'apellido' => $data['apellido'],
					'email' => $data['email'],
					'usuario' => $data['usuario'],
					'perfil_id' => $data['perfil_id'],
					'logged_in' => True //Para saber si está logueado
				];
				//Se cumple la verificación inicia la sesión
				$session->set($ses_data);

				session()->setFlashdata('msg','¡¡Bienvenido!!');
				return redirect()->to('/panel');
			        //return redirect()->to('/prueba');//pagina principal
			}else{
				//no paso la validación del password
				$session->setFlashdata('msg','Contraseña Incorrecta');
				return redirect()->to('/login_controller');
			}
		}else{
			$session->setFlashdata('msg','No Existe el Email o es Incorrecto');
			return redirect()->to('/login_controller');
		}

	}
	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to('/'); // / -> retornar al home
	}
}

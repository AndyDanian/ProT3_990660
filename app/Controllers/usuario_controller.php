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
		echo view('back/usuario/registro',);
		echo view('front/footer_view',);
	}
	public function fromValidation() {

		$input = $this->validate([
			'nombre' => 'required|min_length[3]',
			'apellido' => 'required|min_length[3]|max_length[25]',
			'usuario' => 'required|min_length[3]',
			'email' => 'required|min_length[4]|max_length[100]|valid',
			'pass' => 'required|min_length[4]',
		])
	}	
}

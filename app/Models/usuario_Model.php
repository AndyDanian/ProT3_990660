<?php
namespace App\Models;
use CodeIgniter\Model;
Class usuario_Model extends Model
{
	protected $table = "usuarios";             //nombre de la carpeta
	protected $primaryKey = "id_usuarios";    //identificador de la tabla
	// todos los campos de la tabla
	protected $allowedFields = ['nombre','apellido','usuario','email','pass','perfil_id','baja','created_at'];
}

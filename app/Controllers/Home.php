<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
	$data['titulo']='inicio';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }
    public function inicio()
    {
	$data['titulo']='inicio';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }
    public function acerca()
    {
	$data['titulo']='acerca de nosotros';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/acerca');
        echo view('front/footer_view');
    }
    public function quienes()
    {
	$data['titulo']='quienes somos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/quienes');
        echo view('front/footer_view');
    }
    public function registrar()
    {
	$data['titulo']='registro';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/registrar');
        echo view('front/footer_view');
    }
    public function acceder()
    {
	$data['titulo']='acceder';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/acceder');
        echo view('front/footer_view');
    }    
}

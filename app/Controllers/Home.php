<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }
    public function inicio()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }
    public function acerca()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/acerca');
        echo view('front/footer_view');
    }
    public function quienes()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/quienes');
        echo view('front/footer_view');
    }
    public function registrar()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/registrar');
        echo view('front/footer_view');
    }
    public function acceder()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/acceder');
        echo view('front/footer_view');
    }    
}

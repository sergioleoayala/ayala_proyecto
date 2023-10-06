<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data ['titulo']='pagina principal';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal_ultimo');
        echo view('front/footer_view');
    }

public function quienes_somos()
    {
        $data ['titulo']='quienes somos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }

public function acercade()
    {
        $data ['titulo']='Acerca de';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/acercade');
        echo view('front/footer_view');
    }

public function registro()
    {
          $data ['titulo']='registro';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }


public function login()
    {
          $data ['titulo']='login';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

public function usuario_logueado()
    {
          $data ['titulo']='usuario_logueado';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/usuario_logueado');
        echo view('front/footer_view');
    }








}
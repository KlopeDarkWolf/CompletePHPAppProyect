<?php

class UsuarioController extends UsuarioRepositorio{
    public function index(){
        echo "Controlador Usuarios, Acción index";
    }

    public function registro(){
        require_once 'views/usuario/registro.php';
    }

    
}
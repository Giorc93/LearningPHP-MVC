<?php

class UsuarioController {
    
    public function createUser() {
        require_once 'views/usuarios/createUser.php';
        
    }

    public function showAll() {
        require_once 'models/usuarioM.php';     //Carga el modelo de usuario
        
        $usuario = new Usuario();           //Instancia un objeto de clase usuario
        
        $users = $usuario->getAll('usuarios');  //Utiliza la función getAll() 
        
        require_once 'views/usuarios/showAll.php';
    }
}
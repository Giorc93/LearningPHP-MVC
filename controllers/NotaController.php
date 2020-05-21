<?php

class NotaController {
    
    public function listar(){
        //Modelo
        require_once 'models/notaM.php';
        
        //Lógica acción controlador
       
        $nota = new Nota();
        
        $notas = $nota->getAll('notas');
        
        //Vista
        require_once 'views/nota/listar.php';
    }
    
    public function crear() {
        //Modelo
        require_once 'models/notaM.php';
        
        $nota = new Nota();
        
        $nota->setUsuario_id(2);
        $nota->setTitulo("Nota MVC");
        $nota->setDescripcion("Nota desde NotaController MVC.");
        
        $newnota = $nota->save();
        header("Location:?controller=Nota&action=listar");
    }
    
    public function borrar() {
        
    }
}
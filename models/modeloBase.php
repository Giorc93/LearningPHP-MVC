<?php
require_once 'config/database.php';

class ModeloBase {
    
    public $db;
    
    public function __construct() {
        $this->db = database::conectar();       //Carga la conexión de database.php (estática)
    }

    public function getAll($tabla){
        $query = $this->db->query("SELECT * FROM $tabla ORDER BY id DESC");     //Envia la query a la base de datos
        return $query;
    }
}

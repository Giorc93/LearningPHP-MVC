<h1>Bienvenidos a la WEB</h1>

<?php

require_once 'autoload.php';

//require_once 'controllers/usuarioC.php';
//require_once 'controllers/notaC.php';



if(isset($_GET['controller']) && class_exists($_GET['controller']."Controller")){
    $controladorname = $_GET['controller']."Controller";
    $controlador = new $controladorname();
}else{
    echo "El controlador no existe";
}


if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
    $action = $_GET['action'];
    $controlador->$action();
}else{
    echo "La página que buscas no existe.";
}

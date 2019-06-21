<?php  
//error_reporting(0);//bloquea reporte de errores
//ini_set('display_errors',0);//modifica el init.php para no mostrar errores.

if(!isset($_GET['route'])){
    include_once "view/indexView.php";
}else{
    include_once "controller/routerController.php";
    $controller = new routerController();
    $controller->router();
}
?>
<?php
include_once 'model/LoginModel.php';
  class LoginController {
    private $loginModel;

    public function __construct(){
      $this->loginModel=new LoginModel();
    }//construct

    public function validarUsuario(){
      $usuario=$_POST['username'];
      $contrasena=$_POST['password'];
      $_SESSION['user']=$usuario;
      $_SESSION['pass']=$contrasena;
      $role;
      if(!isset($_SESSION['role'])){
            //la verificación que el usuario se encuentre en la base de datos y corresponda la contraseña se hará en el modelo.
            $role=$this->loginModel->identificarUsuario($usuario,$contrasena);
            if($role==-1){
                  $_POST['error']='El usuario o contraseña están equivocados';
                  include_once 'view/login.php';
                  return -1;
            }//respuesta negativa no encontrado
            $_SESSION['role']=$role;
      }//Valor sesion role asignado
      $this->redireccionarLogin();
    }//function validarUsuario


    public function redireccionarLogin(){
            //Esta sección es para redirigir a la página indexView según el rol
            if($_SESSION['role']==1){//role administrador
                  include_once 'view/headerView.php';
                  include_once 'view/indexView.php';
           }//fin if
           else{//redirije al visitante
              echo 'eres un visitante';
           }
    }//fin redireccionarLogin
  }//class loginController


?>

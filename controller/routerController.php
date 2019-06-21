<?php 

    class routerController{

        public function __construct(){
            session_start();
        }//constructor

        public function router(){
            if($_GET['route']=="sites"){
                include_once "view/sites.php";
            }
            else if($_GET['route']=="place"){
                include_once "view/place.php";
            }
            else if($_GET['route']=="login"){
                include_once "view/login.php";
            }
            else{
                include_once "view/indexView.php";
            }
        }//router
        
    }
?>
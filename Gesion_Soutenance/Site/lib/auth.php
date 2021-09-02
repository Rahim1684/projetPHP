<?php 
function est_connect() : bool{

    if(session_status() === PHP_SESSION_NONE){

        session_start();

    }
    return !empty($_SESSION['connecte']);

}

function utilisateur_connecte() : void {

    if(!est_connect()){
        header('Location: /gesion_soutenance/Site/login.php');
        exit();
    }
    
      


}
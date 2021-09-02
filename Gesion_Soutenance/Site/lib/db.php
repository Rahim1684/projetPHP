<?php 

try{

    $db = new PDO ('mysql:dbname=gest_soutenance;host=localhost','root','');
    $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    

}catch(PDOException $e){

        var_dump($e->getMessage());
    die();

}

<?php
    $db="crud";
    $server="localhost";
    $Username="root";
    $password="";

    try{

      $Db_con= new PDO("mysql:host={$server};dbname={$db}",$Username,$password);
      $Db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch(PDOException $e)
    {

      echo "erreur de connetion a la base de donnee";
    }

 include_once 'class.crud.php';
 $crud = new crud($Db_con);
    


?>



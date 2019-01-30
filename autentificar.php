<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
$user=$_POST["id_email"];
$pass=$_POST["pass_user"];

if(isset($user)&&isset($pass)){
    try{
        require_once '../conexion.php';
        $sql = "select * from TablaCurso where (email='$user' and telefono='$pass')";
        $result = $conn->query($sql);
    } catch(Exception $e){
        $error = $e->getMessage();
    }
    $row=$result->fetch_array();
    if(($row['email']==$user)&&($row['telefono']==$pass)){
        $_SESSION["logueado"]="Hola";
        header("Location:index.php");
    }else{
        header("Location:error.php");
    }
}else{
    session_unset();
    session_destroy();
}

?>
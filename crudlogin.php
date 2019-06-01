<?php
session_start();
include 'conexao.php';

    $email=$_POST['email'];
    $senha=$_POST['senha'];


   
$pegar = "SELECT * FROM usuario WHERE email= '$email' AND senha = '$senha'";
$result= $cone->query($pegar);


if($result->num_rows>0){
    $_SESSION['email']=$email;
    $_SESSION['senha']=$senha;
    header('location:index.php');
}else{
   echo"<script>
     alert('Login ou senha incorretos');
     window.location.href='login.html';
     </script>";
           
}
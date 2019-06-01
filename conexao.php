<?php
 $servidor="localhost";
 $usuario="root";
 $senha="";
 $nomebanco="projetophp";
 
 $cone = new mysqli ($servidor, $usuario , $senha , $nomebanco );
 if($cone->connect_error === TRUE){
     die("falha na conexão:" .$cone -> connect_error );
     
 }
 
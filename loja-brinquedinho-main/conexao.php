<?php
    $host = "localhost";
    $bd = "cadastro";
    $usuario = "aluno";
    $senha = "ceep";

    $conn = mysqli_connect($host, $usuario, $senha, $bd);
   
    //$mysqli = new mysqli($host, $usuario, $senha, $bd);

    if ($conn ->connect_errno){
        echo "falha ao conectar (" . $mysqli->connect_errno . ")"
         . $mysqli->connect_errno;

    }else{
        echo " conectado ao banco de dados,
        acessando a base $bd";
    }
?>
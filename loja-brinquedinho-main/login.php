<?php
    session_start();
    if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))){
        echo "<script> location.href='index.php';</script>";
    }
    include("conexao.php");
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $sql = "select * from cadastro1 where usuario = '{$usuario}'
    AND senha ='{$senha}'";
    $res = $conn->query($sql) or die($conn->error);   
    $row = $res->fetch_object();
    $qtd = $res->num_rows;
    if($qtd > 0){
        $_SESSION["usuario"] = $usuario;
        echo"<script> location.href='dashboard.php';</script>";
    }else{
        echo"<script>alert('usuario ou senha invalido');</script>";
        echo"<script>location.href='index.php';</script>";
    }
?>
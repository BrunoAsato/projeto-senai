<?php
require 'classes/usuario.class.php';
$usuario = new usuario();

if(!empty($_POST['id'])){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $usuario->editar($nome, $senha);    
}else{
    header("Location: /ideia");
}
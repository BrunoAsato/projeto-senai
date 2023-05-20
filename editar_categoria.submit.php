<?php
require 'classes/categoria.class.php';
$categoria = new categoria();

if(!empty($_POST['id'])){
    $nome = $_POST['nome'];

    $categoria->editar($nome);    
}else{
    header("Location: /ideia");
}
<?php
require 'classes/post.class.php';
$post = new post();

if(!empty($_POST['id'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $id_categoria = $_POST['id_categoria'];

    $post->editar($nome, $descricao, $id_categoria);    
}else{
    header("Location: /ideia");
}
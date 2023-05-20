<?php
include 'classes/post.class.php';
$post = new post();

if(!empty($_POST['nome'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $id_categoria = $_POST['id_categoria'];

    $post->adicionar($nome, $descricao, $id_categoria);
    header('Location: index.php');
}else{
    echo '<script type="text/javascript">alert("Post já realizado!");</script>';
}
?>
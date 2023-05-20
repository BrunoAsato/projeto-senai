<?php
include 'classes/post.class.php';
$post = new post();

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $post->excluir($id);
    header("Location: /ideia");
}else{
    echo '<script type="text/javascript">alert("Erro ao excluir post!");</script>';
    header("Location: /ideia");
}
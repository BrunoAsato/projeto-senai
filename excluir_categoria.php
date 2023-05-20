<?php
include 'classes/categoria.class.php';
$categoria = new categoria();

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $categoria->excluir($id);
    header("Location: /ideia");
}else{
    echo '<script type="text/javascript">alert("Erro ao excluir categoria!");</script>';
    header("Location: /ideia");
}
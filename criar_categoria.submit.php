<?php
include 'classes/categoria.class.php';
$categoria = new categoria();

if(!empty($_POST['nome'])){
    $nome = $_POST['nome'];

    $categoria->adicionar($nome);
    header('Location: index.php');
}else{
    echo '<script type="text/javascript">alert("Categoria já cadastrada!");</script>';
}
?>
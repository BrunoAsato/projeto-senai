<?php
include 'classes/usuario.class.php';
$usuario = new usuario();

if(!empty($_POST['nome'])){
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $usuario->adicionar($nome, $senha);
        header('Location: index.php');
    }
    else{
        echo 'script type="text/javascript">alert("Usuario ja cadastrado");</script>';
    }
?>
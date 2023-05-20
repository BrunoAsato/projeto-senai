<?php
session_start();
include 'inc/header.php';
include 'classes/usuario.class.php';

if(!empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $senha = md5($_POST['senha']);

    $usuario = new usuario();
    if($usuario->fazerLogin($nome, $senha)){
        header("Location: index.php");
        exit;
    }else{
        echo "Usuario e/ou senha estão incorretas!";

    }
}
?>

<h2><center>LOGIN</center></h2>

    <form method="post">
        <center>nome: <br>
        <input type="nome" name="nome"><br><br></center>
        <center>Senha: <br>
        <input type="password" name="senha"><br><br></center>
        <center><input class="button" type="submit" value="Entrar"></center><br><br>
        <center><button><a href="criar_usuario.php">CRIAR NOVO USUARIO</a></button></center>
    </form>    

<?php include 'inc/footer.php'; ?>
<?php
require 'inc/header.php';
require 'classes/usuario.class.php';
?>

<h1><center><p class="e">CRIAR NOVO USUARIO</center></h1><br><br><br>

<form method="post" action="criar_usuario.submit.php">
    <center>Nome: <br>
    <input type="text" name="nome"><br><br></center>
    <center>Senha: <br>
    <input type="text" name="senha"><br><br></center>

    <center><input type="submit" name="btCadastrar" value="ADICIONAR"></center>
</form>

<?php require_once 'inc/footer.php';?>
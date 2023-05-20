<?php
require 'inc/header.php';
require 'classes/categoria.class.php';
?>

<h1><center><p class="e">CRIAR NOVA CATEGORIA</center></h1><br><br><br>

<form method="post" action="criar_categoria.submit.php">
    <center>Nome da categoria: <br>
    <input type="text" name="nome"><br><br></center>

    <center><input type="submit" name="enter" value="CRIAR"></center>
</form>

<?php require_once 'inc/footer.php';?>
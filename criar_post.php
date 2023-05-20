<?php
require 'inc/header.php';
require 'classes/post.class.php';
?>

<h1><p class="e">CRIAR NOVO POST</h1><br><br><br>

<form method="post" action="criar_post.submit.php">
    Nome do post: <br>
    <input type="text" name="nome"><br><br>
    Descrição do post: <br>
    <input type="text" name="descricao"><br><br>
    Categoria do post:<br>
    <input type="text" name="id_categoria"><br<br>

    <input type="submit" name="btCadastrar" value="ADICIONAR">
</form>

<?php require_once 'inc/footer.php';?>
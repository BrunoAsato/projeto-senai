<?php
require 'inc/header.php';
require 'classes/post.class.php';
$post = new post();

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $info = $post->busca($id);
        if(emtpy($info['nome'])){
            header("Location: /ideia");
            exit;
        }
}else{
    header("Location: /ideia");
    exit;
}
?>

<h1>EDITAR POST</h1><br><br>
<form method="post" action="editar_post.submit.php">
    <input type="hidden" name="id" value="<?php echo $info['id'];?>">
    Nome da post:<br>
    <input type="text" name="nome" value="<?php echo $info['nome'];?>">
    Descrição do post:<br>
    <input type="text" name="descricao" value="<?php echo $info['descricao'];?>">
    Categoria do post:<br>
    <input type="text" name="id_categoria" value="<?php echo $info['id_categoria'];?>">
    <input type="submit" value="SALVAR">
</form>
<?php require 'inc/footer.php';?>
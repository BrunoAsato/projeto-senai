<?php
require 'inc/header.php';
require 'classes/categoria.class.php';
$categoria = new categoria();

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $info = $categoria->busca($id);
        if(emtpy($info['nome'])){
            header("Location: /ideia");
            exit;
        }
}else{
    header("Location: /ideia");
    exit;
}
?>

<h1>EDITAR CATEGORIA</h1><br><br>
<form method="post" action="editar_categoria.submit.php">
    <input type="hidden" name="id" value="<?php echo $info['id'];?>">
    Nome da categoria:<br>
    <input type="text" name="nome" value="<?php echo $info['nome'];?>">
    <input type="submit" value="SALVAR">
</form>
<?php require 'inc/footer.php';?>
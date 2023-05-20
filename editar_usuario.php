<?php
require 'inc/header.php';
require 'classes/usuario.class.php';
$usuario = new usuario();

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $info = $usuario->busca($id);
        if(emtpy($info['nome'])){
            header("Location: /ideia");
            exit;
        }
}else{
    header("Location: /ideia");
    exit;
}
?>

<h1>EDITAR USUARIO</h1><br><br>
<form method="post" action="editar_usuario.submit.php">
    <input type="hidden" name="id" value="<?php echo $info['id'];?>">
    Nome da usuario:<br>
    <input type="text" name="nome" value="<?php echo $info['nome'];?>">
    Nova senha do usuario:<br>
    <input type="text" name="senha" value="<?php echo $info['senha'];?>">
    
    <input type="submit" value="SALVAR">
</form>
<?php require 'inc/footer.php';?>
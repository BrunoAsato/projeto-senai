<?php
session_start();
include 'inc/header.php';
include 'classes/usuario.class.php';
include 'classes/categoria.class.php';

$usuario = new usuario();
$categoria = new categoria();
?>

<h1>Lista de categorias</h1><br><br>

<table class="table table bordered" width="100%">

<tr algin="center" bgcolor="white">
    <th>nome da categoria</th>
</tr>
<?php
        $lista = $categoria->listar();
        foreach($lista as $item):
?>
<tr algin="center" bgcolor="white">
    <td><?php echo $item['nome'];?></td>

    <button><a href="editar_categoria.php?id=<?php echo $item['id']; ?>">editar</a></button>
    <button class="btn btn-danger"><a href="excluir_categoria.php?id=<?php echo $item['id']; ?>" onclick="return confirm('Você tem certeza que deseja excluir esta categoria?')">EXCLUIR</a></button>
        </td>
        </tr>
<?php
endforeach;
?>
</table>
<?php
include 'inc/footer.php';
?>
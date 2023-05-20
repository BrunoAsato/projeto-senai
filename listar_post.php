<?php
session_start();
include 'inc/header.php';
include 'classes/usuario.class.php';
include 'classes/post.class.php';

$usuario = new usuario();
$post = new post();
?>

<h1>Lista de posts</h1><br><br>

<?php

$result = mysql_query ("SELECT id, nome, descricao FROM post", $con);
while (list ($id, $nome, $descricao) = mysql_fetch_row ($result)) {
     echo " <tr>\n" .
           "  <td><a href=\"info.php?id=$id\">$nome</a></td>\n" .
           "  <td>$descricao</td>\n" .
            " </tr>\n";
}

?>

</table>

<?php
        $lista = $post->listar();
        foreach($lista as $item):
?>
<tr algin="center" bgcolor="white">
    <td><?php echo $item['nome'];?></td>

    <button><a href="editar_post.php?id=<?php echo $item['id']; ?>">editar</a></button>
    <button class="btn btn-danger"><a href="excluir_post.php?id=<?php echo $item['id']; ?>" onclick="return confirm('Você tem certeza que deseja excluir esta post?')">EXCLUIR</a></button>
        </td>
        </tr>
<?php
endforeach;
?>
</table>
<?php
include 'inc/footer.php';
?>
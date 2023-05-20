<?php 
include_once 'inc/header.php'; 
include_once 'classes/post.class.php';

$post = new post();
$lista_post = $post->listar();


print_r($lista_post);

<?php

session_start();

if(!isset($_SESSION['logado'])){
    header("Location: login.php");
}

include_once 'inc/header.php';
include_once 'classes/categoria.class.php';
include_once 'classes/post.class.php';
include_once 'classes/usuario.class.php';

$contatos = new categoria();
$post = new post();
$usuario = new usuario();
$usuario->setUsuario($_SESSION['logado']);
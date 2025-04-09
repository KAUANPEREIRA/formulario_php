<?php
session_start();

if(!empty($_SESSION['usuario'])){
    header('Location:login.php');
    exit();
}

echo 'Bem vindo ' . $_SESSION['usuario'];
/**
 * Deve exibir "Bem vindo [LOGIN DO USUARIO] se ele estiver logado".
 * Deve ter a opção de sair.
 * 
 */
?>

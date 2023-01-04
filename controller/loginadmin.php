<?php 

include_once("../classes/manipulaDados.php");
$manipula = new manipulaDados();
session_start();
$login = $_POST['txtUsuario'];
$password = $_POST['txtSenha'];

$estaLogado = $manipula->validarLoginAdmin($login, $password);

if (!$estaLogado) {
    echo '<script>alert("Usuário ou senha incorreto")</script>';
    echo "<script>location = '../index.php';</script>";
} else {
    $_SESSION['usu'] = $login;
    setcookie("usuario", $login);
    setcookie("senha", $password);
    header("location:../administrador/home.php");
}

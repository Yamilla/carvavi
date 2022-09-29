<?php
include_once("../classes/manipulaDados.php");
$manipula = new manipulaDados();
session_start();
$login = $_POST['txtUsuario'];
$password = $_POST['txtSenha'];
$usuario = $manipula->validarLoginPaciente($login, $password);

if (@mysqli_num_rows($usuario)==0) {
    echo '<script>alert("Usuário ou senha do paciente não cadastrado")></script>';
    echo "<script>location = '../index.php';</script>";
} else {
    $_SESSION['usu'] = $login;
    setcookie("usuario", $login, time() + (86400 * 30), "/");
    setcookie("senha", $password, time() + (86400 * 30), "/");
    while ($row = @mysqli_fetch_array($usuario, MYSQLI_ASSOC)) {
        setcookie("id_paciente", $row['id_paciente'], time() + (86400 * 30), "/");
    }

    header("location:../paciente/home.php");
}

<?php
include_once("../../classes/manipulaDados.php");
function converte($String)
{
    return iconv("UTF-8", "ISO8859-1", $String);
}
$login = $_GET['login'];
$senha = $_POST['altsenha'];

$hashsenha = password_hash(trim($senha), PASSWORD_DEFAULT);

$updateSenha = new manipulaDados();
$updateSenha->setTable("administrador");
$updateSenha->setFields("senha='$hashsenha'");
$updateSenha->updateSenhaAdmin($login,$hashsenha);

echo '<script>alert("'.$updateSenha->getStatus().'");</script>';
echo "<script>location = '../home.php'; </script>";

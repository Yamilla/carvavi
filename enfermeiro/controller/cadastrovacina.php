<?php
    include_once("../../classes/manipulaDados.php");
    function converte($String){
        return iconv("UTF-8", "ISO8859-1",$String);
    } 

$nome = $_POST['txtNomevac'];

$cadastra = new manipulaDados();
$cadastra->setTable("vacina");
$cadastra->setFields("nome_vacina");
$cadastra->setDados("'$nome'");
$cadastra->insert();


echo '<script>alert("'.$cadastra->getStatus().'");</script>';
echo "<script>location = '../home.php'; </script>";

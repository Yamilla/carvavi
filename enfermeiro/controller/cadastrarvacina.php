<?php
    include_once("../../classes/manipulaDados.php");
    function converte($String){
        return iconv("UTF-8", "ISO8859-1",$String);
    } 

$nome = $_POST['txtNomevac'];
$lote = $_POST['txtLote'];
$quantidade = $_POST['txtQuantidade'];
$fabricacao = $_POST['txtDatafabric'];
$validade = $_POST['txtDatavalid'];
$laboratorio = $_POST['txtLaboratorio'];
$id_funcionario = $_POST['id_funcionario'];

$cadastra = new manipulaDados();
$cadastra->setTable("vacina");
$cadastra->setFields("nome_vacina,lote_vacina, quantidade,data_fabricacao,data_validade,laboratorio_vacina,id_funcionario");
$cadastra->setDados("'$nome','$lote','$quantidade','$fabricacao ','$validade','$laboratorio','$id_funcionario'");
$cadastra->insert();


echo '<script>alert("'.$cadastra->getStatus().'");</script>';
echo "<script>location = '../home.php'; </script>";

<?php
    include_once("../../classes/manipulaDados.php");
    function converte($String){
        return iconv("UTF-8", "ISO8859-1",$String);
    } 
$id = $_GET['id'];
$lote = $_POST['txtLote'];
$quantidade = $_POST['txtQuantidade'];
$fabricacao = $_POST['txtDatafabric'];
$validade = $_POST['txtDatavalid'];
$laboratorio = $_POST['txtLaboratorio'];


$cadastra = new manipulaDados();
$cadastra->setTable("descricao_vacina");
$cadastra->setFields("lote, quantidade,data_fabricacao,data_validade,laboratorio,id_vacina");
$cadastra->setDados("'$lote','$quantidade','$fabricacao ','$validade','$laboratorio','$id'");
$cadastra->insert();


echo '<script>alert("'.$cadastra->getStatus().'");</script>';
echo "<script>location = '../home.php'; </script>";

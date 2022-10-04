<?php
    include_once("../../classes/manipulaDados.php");
    function converte($String){
        return iconv("UTF-8", "ISO8859-1",$String);
    } 
$id = $_GET['id']; 
$nome = $_POST['txtNomevac'];
$lote = $_POST['txtLote'];
$quantidade = $_POST['txtQuantidade'];
$fabricacao = $_POST['txtDatafabric'];
$validade = $_POST['txtDatavalid'];
$laboratorio = $_POST['txtLaboratorio'];


$altera = new manipulaDados();
$altera->setTable("vacina");
$altera->setFields("nome_vacina='$nome',lote_vacina='$lote',quantidade='$quantidade',data_fabricacao='$fabricacao',data_validade='$validade',laboratorio_vacina='$laboratorio'");
$altera->setFieldId("id_vacina");
$altera->setValueId($id);
$altera->update();
echo '<script>alert("'.$altera->getStatus().'");</script>';
echo "<script>location = '../home.php'; </script>";

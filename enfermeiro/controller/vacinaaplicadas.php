<?php
    include_once("../../classes/manipulaDados.php");
    function converte($String){
        return iconv("UTF-8", "ISO8859-1",$String);
    } 
$id = $_GET['id'];
$nome = $_POST['nomeVacina'];
$lote = $_POST['lote'];
$aplicacao = $_POST['txtDataaplic'];
$dose = $_POST['txtDose'];
$laboaratorio = $_POST['laboratorio'];



$cadastra = new manipulaDados();
$cadastra->setTable("vacinas_aplicadas");
$cadastra->setFields("id_paciente,nome,lote,data_aplicacao,dose,laboratorio,id_vacina");
$cadastra->setDados("'$id','$nome','$lote','$aplicacao ','$dose ','$laboaratorio','$nome'");
$cadastra->insert();


echo '<script>alert("'.$cadastra->getStatus().'");</script>';
echo "<script>location = '../home.php'; </script>";

<?php
    include_once("../../classes/manipulaDados.php");
    function converte($String){
        return iconv("UTF-8", "ISO8859-1",$String);
    } 

$nome = $_POST['nomeVacina'];
$lote = $_POST['lote'];
$aplicacao = $_POST['txtDataaplic'];
$dose = $_POST['txtDose'];
$laboaratorio = $_POST['laboratorio'];
$paciente= $_POST['paciente'];


$cadastra = new manipulaDados();
$cadastra->setTable("vacinas_aplicadas");
$cadastra->setFields("nome,lote,data_aplicacao,dose,laboratorio,id_vacina,id_paciente");
$cadastra->setDados("'$nome','$lote','$aplicacao ','$dose ','$laboaratorio','$nome','$paciente'");
$cadastra->insert();


echo '<script>alert("'.$cadastra->getStatus().'");</script>';
echo "<script>location = '../home.php'; </script>";
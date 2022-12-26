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
$funcionario=$_POST['func'];


$cadastra = new manipulaDados();
$cadastra->setTable("vacinas_aplicadas");
$cadastra->setFields("id_vacina,id_descricao_vacina,id_paciente,id_funcionario,nome,lote,data_aplicacao,dose,laboratorio");
$cadastra->setDados("'$nome','$lote','$id','$funcionario','$nome','$lote','$aplicacao ','$dose ','$laboaratorio'");
$cadastra->insert();

$atualizar = new manipulaDados();
$atualizar -> updateQuantidade();


echo '<script>alert("Vacina aplicada com sucesso!");</script>';
echo "<script>location = '../home.php'; </script>";

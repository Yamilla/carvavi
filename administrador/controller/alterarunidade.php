<?php
    include_once("../../classes/manipulaDados.php");
    function converte($String){
        return iconv("UTF-8", "ISO8859-1",$String);
    } 
     $id = $_GET['id'];
     $nomeuni = $_POST ['txtNomeuni'];
     $rua = $_POST ['txtRua'];
     $numero = $_POST['txtNumero'];
     $bairro = $_POST['txtBairro'];
     $cidade = $_POST['txtCidade'];
     $estado = $_POST['txtEstado'];
     $cep = $_POST['txtCep'];
     $numUnidade = $_POST['txtNumUnidade'];

     $altera = new manipulaDados();
     $altera->setTable("unidade_de_saude");
     $altera->setFields("nome_unidade='$nomeuni',rua='$rua',numero='$numero',bairro='$bairro',cidade='$cidade',estado='$estado',cep='$cep ',numero_unidade='$numUnidade '");
     $altera->setFieldId("id_unidade");
     $altera->setValueId($id);
     $altera->update();
     echo '<script>alert("'.$altera->getStatus().'");</script>';
     echo "<script>location = '../home.php'; </script>";

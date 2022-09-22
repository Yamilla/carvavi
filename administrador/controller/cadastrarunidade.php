<?php
    include_once("../../classes/manipulaDados.php");
    function converte($String){
        return iconv("UTF-8", "ISO8859-1",$String);
    } 
     $nomeuni = $_POST ['txtNomeuni'];
     $rua = $_POST ['txtRua'];
     $numero = $_POST['txtNumero'];
     $bairro = $_POST['txtBairro'];
     $cidade = $_POST['txtCidade'];
     $estado = $_POST['txtEstado'];
     $cep = $_POST['txtCep'];
     $numUnidade = $_POST['txtNumUnidade'];

    $cadastra = new manipulaDados();
    $cadastra->setTable("unidade_de_saude");
    $cadastra->setFields("nome_unidade,rua,numero,bairro,cidade,estado,cep,numero_unidade");
    $cadastra->setDados("'$nomeuni','$rua','$numero','$bairro','$cidade','$estado','$cep','$numUnidade'");
    $cadastra->insert();
    
    
    echo '<script>alert("'.$cadastra->getStatus().'");</script>';
    echo "<script>location = '../home.php'; </script>";
    ?>
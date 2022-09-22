<?php
    include_once("../../classes/manipulaDados.php");
    function converte($String){
        return iconv("UTF-8", "ISO8859-1",$String);
    } 
$id = $_POST['txtId'];
$nome = $_POST['txtNome'];
$cpf = $_POST['txtCpf'];
$rg = $_POST['txtRg'];
$telefone = $_POST['txtTelefone'];
$data_nascimento= $_POST['txtData'];
$rua= $_POST['txtRua'];
$numero= $_POST['txtNumero'];
$bairro= $_POST['txtBairro'];
$cidade= $_POST['txtCidade'];
$estado= $_POST['txtEstado'];
$cep= $_POST['txtCep'];
$cargo=$_POST['txtCargo'];
$email= $_POST['txtEmail'];
$usuario= $_POST['txtUsuario'];
$senha= $_POST['txtSenha'];
$id_unidade = $_POST['id_unidade'];

$altera = new manipulaDados();
$altera->setTable("funcionario");
$altera->setFields("nome='$nome',cpf='$cpf',rg='$rg',telefone='$telefone',data_nascimento='$data_nascimento',rua='$rua',numero='$numero',bairro='$bairro',cidade='$cidade',estado='$estado',cep='$cep',cargo='$cargo',email='$email',usuario='$usuario',senha='$senha',id_unidade='$id_unidade'");
$altera->setFieldId("id_funcionario");
$altera->setValueId($id);
$altera->update();
echo '<script>alert("'.$altera->getStatus().'");</script>';
echo "<script>location = '../home.php'; </script>";
?>
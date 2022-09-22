<?php
    include_once("../../classes/manipulaDados.php");
    const CAMINHO_CARTAOVACINAS = "../../cartaovacinas/";
    function converte($String){
        return iconv("UTF-8", "ISO8859-1",$String);
    } 
$id = $_POST['txtId'];
$nome = $_POST['txtNome'];
$cpf = $_POST['txtCpf'];
$rg = $_POST['txtRg'];
$sus = $_POST['txtSus'];
$telefone = $_POST['txtTelefone'];
$data_nascimento= $_POST['txtData'];
$rua= $_POST['txtRua'];
$numero= $_POST['txtNumero'];
$bairro= $_POST['txtBairro'];
$cidade= $_POST['txtCidade'];
$estado= $_POST['txtEstado'];
$cep= $_POST['txtCep'];
$email= $_POST['txtEmail'];
$usuario= $_POST['txtUsuario'];
$senha= $_POST['txtSenha'];
$id_funcionario = $_POST['id_funcionario'];


$altera = new manipulaDados();
$altera->setTable("paciente");
$altera->setFields("nome_paciente='$nome',cpf='$cpf ',rg='$rg ',sus='$sus',nascimento='$data_nascimento',rua='$rua',numero='$numero',bairro='$bairro',cidade='$cidade',estado='$estado',cep='$cep',telefone='$telefone',email='$email',usuario='$usuario',senha='$senha',id_funcionario='$id_funcionario'");
$altera->setFieldId("id_paciente");
$altera->setValueId($id);
$altera->update();
echo '<script>alert("'.$altera->getStatus().'");</script>';
echo "<script>location = '../home.php'; </script>";
?>
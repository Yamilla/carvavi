<?php
    include_once("../../classes/manipulaDados.php");
    const CAMINHO_CARTAOVACINAS = "../../cartaovacinas/";
    function converte($String){
        return iconv("UTF-8", "ISO8859-1",$String);
    } 

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



$cadastra = new manipulaDados();
$cadastra->setTable("paciente");
$cadastra->setFields("nome_paciente,cpf,rg,sus,telefone,nascimento,rua,numero,bairro,cidade,estado,cep,email,usuario,senha");
$cadastra->setDados("'$nome','$cpf','$sus','$rg','$telefone','$data_nascimento','$rua','$numero','$bairro','$cidade','$estado','$cep','$email','$usuario','$senha'");
$cadastra->insert();
mkdir(CAMINHO_CARTAOVACINAS . $nome, 0777);

echo '<script>alert("'.$cadastra->getStatus().'");</script>';
echo "<script>location = '../home.php'; </script>";

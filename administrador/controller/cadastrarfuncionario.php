<?php
    include_once("../../classes/manipulaDados.php");
    function converte($String){
        return iconv("UTF-8", "ISO8859-1",$String);
    } 

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
$hashsenha = password_hash(trim($senha), PASSWORD_DEFAULT);
$id_unidade = $_POST['id_unidade'];
$orgao = $_POST['txtOrgao'];
 
try {
    $cadastra = new manipulaDados();
    $cadastra->setTable("funcionario");
    $cadastra->setFields("nome,cpf,rg,telefone,data_nascimento,rua,numero,bairro,cidade,estado,cep,cargo,email,usuario,senha,id_unidade,orgao_expedidor");
    $cadastra->setDados("'$nome','$cpf','$rg','$telefone','$data_nascimento','$rua','$numero','$bairro','$cidade','$estado','$cep','$cargo','$email','$usuario','$hashsenha','$id_unidade','$orgao'");
    $cadastra->insert();
    echo '<script>alert("O técnico de enfermagem foi cadastrado com sucesso!");</script>';
    echo "<script>location = '../home.php'; </script>";

} catch (mysqli_sql_exception $e) {
    if (str_starts_with($e->getMessage(), "Duplicate entry")) {
        echo '<script>alert("Este usuário já está cadastrado o usuário tem que ser unico. escolha outro");</script>';
        echo "<script>location = '../home.php'; </script>";
    } else {
        throw $e;
    };
}


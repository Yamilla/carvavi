<?php
include_once("../../classes/manipulaDados.php");
function converte($String)
{
    return iconv("UTF-8", "ISO8859-1", $String);
}

$id = $_GET['id'];
$remove = new manipulaDados();
$remove->setTable("paciente");
$remove->setFieldId("id_paciente");
$remove->setValueId($id);
try {
    $remove->delete();
    echo '<script>alert("O Paciente foi removido com sucesso");</script>';
    echo "<script>location = '../home.php'; </script>";
} catch (\Throwable $th) {
    echo '<script>alert("O paciente não pode ser removido por está sendo usado em outra área do sistema!");</script>';
    echo "<script>location = '../home.php'; </script>";
}

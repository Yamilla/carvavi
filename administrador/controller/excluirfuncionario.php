<?php
include_once("../../classes/manipulaDados.php");
function converte($String)
{
    return iconv("UTF-8", "ISO8859-1", $String);
}
$id = $_GET['id'];
$remove = new manipulaDados();
$remove->setTable("funcionario");
$remove->setFieldId("id_funcionario");
$remove->setValueId($id);
try {
    $remove->delete();
    echo '<script>alert("O funcionário foi removido com sucesso");</script>';
    echo "<script>location = '../home.php'; </script>";
} catch (\Throwable $th) {
    echo '<script>alert("O funcionário não pode ser removida");</script>';
    echo "<script>location = '../home.php'; </script>";
}
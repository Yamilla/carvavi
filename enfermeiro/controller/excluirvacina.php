<?php
include_once("../../classes/manipulaDados.php");
function converte($String)
{
    return iconv("UTF-8", "ISO8859-1", $String);
}

$id = $_GET['id'];
$remove = new manipulaDados();
$remove->setTable("descricao_vacina");
$remove->setFieldId("id_descicao_vacina");
$remove->setValueId($id);
try {
    $remove->delete();
    echo '<script>alert("A vacina foi removida com sucesso");</script>';
    echo "<script>location = '../home.php'; </script>";
} catch (\Throwable $th) {
    echo '<script>alert("A vacina não pode ser removida por está sendo usada em outra área do sistema!");</script>';
    echo "<script>location = '../home.php'; </script>";
}

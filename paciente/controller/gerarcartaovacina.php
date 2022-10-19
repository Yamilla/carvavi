<?php
include_once("../../classes/manipuladados.php");
require("../../fpdf/fpdf.php");

$id_paciente = $_GET['id'];
$busca = new manipulaDados();
$busca->setTable("paciente");
$resultado = $busca->getById($id_paciente);

$pdf = new FPDF("P", "pt", "A4");
$pdf->AddPage();
$pdf->Image("../../img/Cartaovacina.png", 0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight());

while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
  $pdf->SetFont('Arial', 'b', 10);
  $pdf->Cell(820, 230, utf8_decode($row['sus']), 0, 0, 'C');
  $pdf->ln(160);
  $pdf->Cell(140, 10, utf8_decode($row['nome_paciente']), 0, 0, 'C');
  $pdf->ln(25);
  $pdf->Cell(120, 10, utf8_decode($row['cpf']), 0, 0, 'C');
  $pdf->Cell(215, 5, utf8_decode($row['rg']), 0, 0, 'C');
  $pdf->Cell(170, 10, utf8_decode($row['orgao_expedidor']), 0, 0, 'C');
  $pdf->ln(25);
  $pdf->Cell(170, 10, utf8_decode($row['rua']), 0, 0, 'C');
  $pdf->Cell(100, 10, utf8_decode($row['numero']), 0, 0, 'C');
  $pdf->Cell(150, 10, utf8_decode($row['bairro']), 0, 0, 'C');
  $pdf->ln(25);
  $pdf->Cell(170, 10, utf8_decode($row['cidade']), 0, 0, 'C');
  $pdf->Cell(100, 10, utf8_decode($row['estado']), 0, 0, 'C');
  $pdf->Cell(170, 10, utf8_decode($row['cep']), 0, 0, 'C');
  $pdf->ln(25);
  $pdf->Cell(350, 10, utf8_decode($row['nascimento']), 0, 0, 'C');
  $pdf->Cell(20, 10, utf8_decode($row['telefone']), 0, 0, 'C');
  $pdf->ln(25);
  $pdf->Cell(230, 10, utf8_decode($row['email']), 0, 0, 'C');
}
$pdf->ln(100);
$id_paciente = $_GET['id'];
$busca = new manipulaDados();
$busca->setTable("unidade_de_saude" and "funcionario" and "vacina" and "vacinas_aplicadas" and "descricao_vacina");
$resultado = $busca->cartaoVacina($id_paciente);
while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
  $pdf->SetFont('Arial', 'b', 8);
  $pdf->Cell(20, 10, utf8_decode($row['nome_vacina']) , 0, 0, 'C');
  $pdf->Cell(120, 10, utf8_decode($row['lote']) , 0, 0, 'C');
  $pdf->Cell(50, 10, utf8_decode($row['dose']) , 0, 0, 'C');
  $pdf->Cell(60, 10, utf8_decode($row['laboratorio']) , 0, 0, 'C');
  $pdf->Cell(135, 10, utf8_decode($row['data_aplicacao']) , 0, 0, 'C');
  $pdf->Cell(20, 10, utf8_decode($row['nome_unidade']) , 0, 0, 'C');
  $pdf->Cell(200, 10, utf8_decode($row['nome']) , 0, 0, 'C');
  $pdf->ln(10);
}

$pdf->Output("I", "cartaodevacina.pdf", true);

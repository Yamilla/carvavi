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
  $pdf->SetFont('Arial', '', 10);
  $pdf->ln(150);
  $pdf->Cell(170);
  $pdf->Cell(10, 10, utf8_decode($row['nome_paciente']), 0, 0, 'C');
  $pdf->ln(-20);
  $pdf->Cell(120);
  $pdf->Cell(20, 100, utf8_decode($row['sus']), 0, 0, 'C');
  $pdf->ln(21);
  $pdf->Cell(110);
  $pdf->Cell(20, 100, utf8_decode($row['rua']), 0, 0, 'C');
  $pdf->Cell(22);
  $pdf->Cell(20, 100, utf8_decode($row['numero']), 0, 0, 'C');
  $pdf->Cell(45);
  $pdf->Cell(20, 100, utf8_decode($row['bairro']), 0, 0, 'C');
  $pdf->ln(25);
  $pdf->Cell(125);
  $pdf->Cell(20, 100, utf8_decode($row['cidade']), 0, 0, 'C');
  $pdf->Cell(150);
  $pdf->Cell(20, 100, utf8_decode($row['estado']), 0, 0, 'C');
  $pdf->Cell(120);
  $pdf->Cell(20, 100, utf8_decode($row['cep']), 0, 0, 'C');
  $pdf->ln(25);
  $pdf->Cell(190);
  $pdf->Cell(20, 100, utf8_decode($row['nascimento']), 0, 0, 'C');
  $pdf->ln(-1);
  $pdf->Cell(390);
  $pdf->Cell(20, 100, utf8_decode($row['telefone']), 0, 0, 'C');
  $pdf->Cell(400);
}
$pdf->Cell(400);
$id_paciente = $_GET['id'];
$busca = new manipulaDados();
$busca->setTable("unidade_de_saude" and "funcionario" and "vacina" and "vacinas_aplicadas");
$resultado = $busca->cartaoVacina($id_paciente);
while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
  $pdf->SetFont('Arial', 'b', 8);
  $pdf->ln(15);
  $pdf->Cell(0, 400, utf8_decode('NOME: ') . $row['nome_vacina'] . utf8_decode(' ') . utf8_decode('LOTE: ') . $row['lote_vacina'] . utf8_decode(' ') . utf8_decode('DOSE: ') . $row['dose'] . utf8_decode(' ') . utf8_decode('LABORATORIO: ') . $row['laboratorio_vacina'] . utf8_decode(' ') . utf8_decode('DATA: ') . $row['data_aplicacao'] . utf8_decode(' ') . utf8_decode('UBS: ') . $row['nome_unidade'] . utf8_decode(' ') . utf8_decode('ASS: ') . $row['nome'], 0, 0, 'C');
}

$pdf->Output("I", "cartaodevaciana.pdf", true);

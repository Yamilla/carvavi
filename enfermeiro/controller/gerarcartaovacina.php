<?php
include_once("../../classes/manipuladados.php");
require("../../fpdf/fpdf.php");


$busca = new manipulaDados();
$busca->setTable("paciente");
$resultado = $busca->getAllDataTable();



$pdf = new FPDF("P","pt","A4");
      $pdf->AddPage();
      $pdf->Image("../../img/Cartaodevacina.png",0,0,$pdf->GetPageWidth(),$pdf->GetPageHeight());

      
      while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        $pdf->SetFont('Times','I',16);
        $pdf->ln(20);
        $pdf->Cell(80);
        $pdf->Cell(20,10,utf8_decode($row['nome_paciente']),0,0,'C');
        

      }
      


      $pdf->Output("I","certificado.pdf",true);
?>
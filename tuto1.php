<?php
//header('Content-Type: text/html; charset=UTF-8'); 
require('fpdf/fpdf.php');

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',40);
$pdf->Cell(90,30,'EL SALMÁN',1);
$pdf->Output();
?>

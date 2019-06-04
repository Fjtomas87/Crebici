<?php
require('pdf.php');

$alquiler = new Alquiler();
$alquiler->getTodos();
$rows = $alquiler->getAlquileres();

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();


$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 6, 'ALGO', 1, 0, 'C', 1);
$pdf->Cell(70, 6, 'ALGO', 1, 0, 'C', 1);
$pdf->Cell(70, 6, 'ALGO', 1, 0, 'C', 1);
$pdf->Cell(70, 6, 'ALGO', 1, 0, 'C', 1);

$pdf->Output();
?>
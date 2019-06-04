<?php
require('pdf.php');
require('clases/alquiler_model.php');
$alquiler = new Alquiler();
$alquiler->getTodos();
$rows = $alquiler->getAlquileres();

$pdf = new PDF('L','mm', 'A4');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetX(30);
$pdf->Cell(30, 6, 'ID Alquiler', 1, 0, 'C', 0);
$pdf->Cell(50, 6, 'Fecha Alquiler', 1, 0, 'C', 0);
$pdf->Cell(25, 6, 'Dias', 1, 0, 'C', 0);
$pdf->Cell(30, 6, 'ID Cliente', 1, 0, 'C', 0);
$pdf->Cell(30, 6, 'ID Bicileta', 1, 0, 'C', 0);
$pdf->Cell(50, 6, 'Estado', 1, 1, 'C', 0);
 
foreach($rows as $row){
    $pdf->SetX(30);
    $pdf->Cell(30, 6, $row['idA'], 1, 0, 'C', 0);
    $pdf->Cell(50, 6, $row['fechaIni'], 1, 0, 'C', 0);
    $pdf->Cell(25, 6, $row['dias'], 1, 0, 'C', 0);
    $pdf->Cell(30, 6, $row['idC'], 1, 0, 'C', 0);
    $pdf->Cell(30, 6, $row['idBici'], 1, 0, 'C', 0);
    $pdf->Cell(50, 6, $row['estado'], 1, 1, 'C', 0);
    
}


$pdf->Output();
?>
<?php
require('fpdf/fpdf.php');

class PDF extends FPDF{
    
    function Header(){
        $this->Image('imagen/logo.jpg', 5, 5, 30);
        $this->SetFont('Arial', 'B', 25);
        $this->Cell(70);
        $this->Cell(120, 20, 'Contabilidad', 0, 0, 'C');
        $this->Ln(30);
    }
    
    function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 9);
        $this->Cell(0, 10, 'Pagina '.$this->PageNo().'/{nb}', 0, 0, 'C');
    }
}
?>
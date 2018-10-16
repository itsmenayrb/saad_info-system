<?php
require('pdf/fpdf.php');

$pdf=new FPDF('p','cm','A4');

$pdf->AddPage();


$pdf->SetTitle('Barangay Clearance',false);
$pdf->Image('logo.png',2,1,'L');
$pdf->Image('logo1.png',15,1,'R');
$pdf->SetFont('Times','',12);
$pdf->Cell(20,0.5,'Republic of the Philippines',0,1,'C');
//$pdf->Ln();
$pdf->Cell(20,0.5,'Province of Cavite',0,1,'C');
//$pdf->Ln();
$pdf->Cell(20,0.5,'City of Dasmarinas',0,1,'C');
$pdf->SetFont('Times','B',13);
$pdf->Cell(20,0.5,'Barangay Salitran II',0,1,'C');
$pdf->SetFont('Times','',12);
$pdf->Cell(20,0.5,'Tel. No. (046) 540-5804',0,1,'C');
//$pdf->Ln();
$pdf->SetFont('Times','B',16);
$pdf->Cell(20,2,'Office of the Punong Barangay',0,1,'C');
$pdf->SetFont('Times','U',16);
$pdf->Cell(20,1.5,'BARANGAY CLEARANCE',0,1,'C');
$pdf->SetFont('Times','B',12);
$pdf->Cell(18,0,'Date:_______________ ',0,1,'R');
$pdf->SetFont('Times','',12);
$pdf->Cell(18,1,'Control No. _____________ ',0,1,'R');
$pdf->SetFont('Times','B',12);
$pdf->Cell(16,1,'To Whom It May Concern:',0,1,'C');
$pdf->MultiCell(19,1,'This is to certify that ($name) , ($age) years of age Filipino citizen and whose specimen signature appears below, is a resident of ($address)',0,'J');

//$pdf->SetFillColor(0,0,0);
//$pdf->SetDrawColor(188,188,188);

//$width=$pdf->w;
//$height=$pdf->h;
//$pdf->Line(0,0,$width,$height);
//$pdf->Line($width,0,0,$height);
$pdf->SetLineWidth(0.1);
$pdf->Line(1,5.5,20,5.5);
$pdf->Line(6,5.5,6,27);

$pdf->Output();

?>
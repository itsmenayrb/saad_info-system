<?php
//------switch to tcpdf-----
        //require('pdf/fpdf.php');
include('pdf_mc_table.php');


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'barangay');

$pdf=new FPDF('p','cm','A4');
//$pdf=new PDF_MC_Table();

$pdf->AddPage();

$pdf->SetTitle('Barangay Clearance',false);
$pdf->Image('logo.png',2,1,'L');
$pdf->Image('logo1.png',15,1,'R');
//---------watermarktobecontinued
$pdf->Image('Image_004.png',10,1,'C'); 
//------<h>---------
$pdf->SetFont('Times','',12);//initial font
$pdf->Cell(20,0.5,'Republic of the Philippines',0,1,'C');
$pdf->Cell(20,0.5,'Province of Cavite',0,1,'C');
$pdf->Cell(20,0.5,'City of Dasmarinas',0,1,'C');
$pdf->SetFont('Times','B',13);//set new font
$pdf->Cell(20,0.5,'Barangay Salitran II',0,1,'C');
$pdf->SetFont('Times','',12); //set new font
$pdf->Cell(20,0.5,'Tel. No. (046) 540-5804',0,1,'C');
$pdf->SetFont('Times','B',16); //set new font
$pdf->Cell(20,2,'Office of the Punong Barangay',0,1,'C');
//--------</h>-------

//----------<p1>-----
$pdf->SetFont('Times','U',16); //set new font
$pdf->Cell(20,1.5,'CERTIFICATION',0,1,'C');
$pdf->SetFont('Times','',12); //set new font
$pdf->Cell(6,1,'To whom it may concern: ',1,1,'L');
$pdf->Cell(6,1,'     This is to certify that',1,0,'L');

//$pdf->SetWidth(3);
//$pdf->SetLineHeight(1);

//$query1=mysqli_query($con,"select * from address");
$query=mysqli_query($con,"select * from residents");
while ($data=mysqli_fetch_array($query))
{
     foreach($data as $item)
        {
           $pdf->Cell(1,1,$data['Prefix'],1,0);
           $pdf->Cell(3,1,$data['FirstName'],1,0);
           $pdf->Cell(2,1,$data['MiddleName'],1,0);
           $pdf->Cell(3,1,$data['LastName'],1,0);
           $pdf->Cell(1,1,$data['Suffix'],1,1);
           $pdf->Cell(5,1,'is a resident of barangay Salitran II with known address at',1,0,'C');

        }

}
$pdf->Output();

?>
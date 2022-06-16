<?php
require('classes/fpdf/fpdf.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'event');

class PDF extends FPDF {
	function Header(){
		
		
		//put logo
		// $this->Image('logo-small.png',10,10,10);
		// $this->SetFont('Tahoma','B',12);
		// $this->Cell(100,10,'Data ',0,1);
		
		//dummy cell to give line spacing
		//$this->Cell(0,5,'',0,1);
		//is equivalent to:
		$this->Ln(5);
		
		$this->SetFont('Tahoma','B',12);
		
		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		$this->Cell(40,5,'Name',1,0,'C',true);
		$this->Cell(40,5,'Venue',1,0,'C',true);
		$this->Cell(50,5,iconv('UTF-8', 'TIS-620','รายละเอียด'),1,0,'C',true);
		$this->Cell(40,5,iconv('UTF-8', 'TIS-620','วันที่'),1,0,'C',true);
		$this->Cell(40,5,'sport',1,0,'C',true);
		// $this->Cell(20,5,'event_fee',1,0,'',true);
		// $this->Cell(20,5,'player_fee',1,0,'',true);
		// $this->Cell(20,5,'visior_fee',1,0,'',true);
		// $this->Cell(60,5,'event_image',1,0,'',true);
		$this->Cell(45,5,'created_at',1,1,'',true);
		
	}
	function Footer(){
		//add table's bottom line
		$this->Cell(255,0,'','T',1,'',true);
		
		// //Go to 1.5 cm from bottom
		// $this->SetY(-15);
				
		// $this->SetFont('Tahoma','',8);
		
		// //width = 0 means the cell is extended up to the right margin	
		
		// $this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0,'C');
	}
}

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new PDF('L','mm',"A4"); //use new class
$pdf->AddFont('Tahoma','','Tahoma.php');
$pdf->AddFont('Tahoma','B','Tahomab.php');
//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,12);
$pdf->AddPage('L');

$pdf->SetFont('Tahoma','',12);

$pdf->SetDrawColor(180,180,255);

$query=mysqli_query($con,"select * from event");
while($data=mysqli_fetch_array($query)){
    $pdf->SetFont('Tahoma','',12);
	$pdf->Cell(40,5,iconv('UTF-8', 'TIS-620',$data['event_name']),'LR',0,'');
	$pdf->Cell(40,5,$data['event_venue'],'LR',0);
	$pdf->Cell(50,5,$data['event_details'],'LR',0);
	$pdf->Cell(40,5,$data['event_date'],'LR',0);
	$pdf->Cell(40,5,$data['sport'],'LR',0);
	// $pdf->Cell(20,5,$data['event_fee'],'LR',0);
	// $pdf->Cell(20,5,$data['player_fee'],'LR',0);
	// $pdf->Cell(20,5,$data['visitor_fee'],'LR',0);
	// $pdf->Cell(60,5,$data['event_image'],'LR',0);
	$pdf->Cell(45,5,$data['created_at'],'LR',1);
}

$filename="C:/Users/BBC1009082/Desktop/project/test_line_notify/pdf/test.pdf";
$pdf->Output($filename,'F');

$pdf->Output();
?>
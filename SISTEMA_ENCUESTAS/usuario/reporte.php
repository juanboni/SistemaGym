<?php




	require "Pdfcorreciondescargado/fpdf.php";

	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../imagenes/logoups.png', 90, 5, 20 );
			$this->Ln(20);

			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Ticket',0,0,'C');
			$this->Ln(15);
		}

		
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
	

	$pdf = new PDF();
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	date_default_timezone_set("America/Lima");
  	$date = new DateTime();
  	//$fecha_generadoticket = $date->format('Y-m-d H:i:s');
	$fecha_generadoticket = $date->format('d-m-Y');
	
	// CABECERA
	$pdf->SetFont('Helvetica','',12);
	$pdf->Cell(184,6,'www.ups.edu.ec',0,1,'C');
	$pdf->SetFont('Helvetica','',8);
	$pdf->Cell(184,6,'C.I.F.: 01234567A',0,1,'C');
	$pdf->Cell(184,6,'C/ Arturo Soria, 1',0,1,'C');
	$pdf->Cell(184,6,'C.P.: 28028 Madrid (Madrid)',0,1,'C');
	$pdf->Cell(184,6,'999 888 777',0,1,'C');
	$pdf->Cell(184,6,'alfredo@lacodigoteca.com',0,1,'C');
	
	// DATOS FACTURA        
	$pdf->Ln(5);
	$pdf->Cell(184,6,'Factura Simpl.: F2019-000001',0,1,'C');
	$pdf->Cell(184,6,"Fecha: $fecha_generadoticket",0,1,'C');
	$pdf->Cell(184,6,'Metodo de pago: Tarjeta',0,1,'C');
	
	
	
	
	$sumafechacaducacionticket = date("d-m-Y",strtotime($fecha_generadoticket."+ 6 month")); 
	//resto 1 semana
	$sumaresta = date("d-m-Y",strtotime($fecha_generadoticket."- 6 month"));

	
	// PIE DE PAGINA
	$pdf->Ln(10);
	
	$pdf->Cell(184,6,'EL PERIODO DE VALIDACION DE ESTE DOCUMENTO',0,1,'C');
	$pdf->Ln(3);
	$pdf->Cell(184,6,"CADUCA EL DIA $sumafechacaducacionticket",0,1,'C');
	
	$pdf->Output();

 ?>
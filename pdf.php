<?php
    include("funcionFecha.php");
    $nCliente = $_GET["nCliente"];
    $texto = "Por medio de la presente autorizo que de acuerdo al contrato que firmé en INFONAVIT para la remodelación de mi vivienda  se efectué el pago del 8.22% del monto otorgado para la ejecución de los trabajos a Inco Vivir Bien S. de R.L. de C.V por el concepto de prestación de servicios contemplados en el contrato celebrado entre el derechohabiente y el administrador.";
    $texto = utf8_decode($texto);
    $texto2 = "Así mismo solicito también le sea otorgado el adelanto para el inicio de los trabajos a CPC DE GDL CONSTRUCTORA S.A DE C.V.  para que inicie con los mismos de forma inmediata.";
    $texto2 = utf8_decode($texto2);
    $texto3 = "Sin más por el momento gracias, quedo de usted.";
    $texto3 = utf8_decode($texto3);
    $texto4 = "A T E N T A M E N T E";
    $texto4 = utf8_decode($texto4);
    $texto5 = "___________________________";
    $nCliente = utf8_decode($nCliente);

    require('fpdf/fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetMargins(20, 20, 20);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(80);
    $pdf->Cell(40,10," Tuxtla Gutierrez, Chiapas, a ".$dia." de ".$nombreMes." de ". $anio);
    $pdf->Ln(25);
    $pdf->Cell(40,10,"JUAN CARLOS REYES CARABANTES:");
    $pdf->Ln(6);
    $pdf->Cell(40,10,"INCO VIVIR BIEN S. DE R.L. DE C.V.");
    $pdf->Ln(15);
    $pdf->MultiCell(0,5,$texto);
    $pdf->Ln(5);
    $pdf->MultiCell(0,5,$texto2);
    $pdf->Ln(10);
    $pdf->MultiCell(0,5,$texto3);
    $pdf->Ln(30);
    $pdf->MultiCell(0,5,$texto4,0,'C');
    $pdf->Ln(5);
    $pdf->MultiCell(0,5,$texto5,0,'C');
    $pdf->Ln(5);
    $pdf->MultiCell(0,5,$nCliente,0,'C');
    $pdf->Output();
?>
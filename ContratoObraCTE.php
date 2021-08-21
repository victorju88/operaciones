<?php
include("funcionFechaUndia.php");
require('fpdf/fpdf.php');
$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$nCliente = $apellido." ".$nombre;
$calle = $_GET["calle"];
$colonia = $_GET["colonia"];
$cp = $_GET["cp"];
$delegacion = $_GET["delegacion"];
$correo = $_GET["correo"];
$direccion = $calle.", ".$colonia.", cp ".$cp;
$pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetMargins(20, 20, 20);   
    $pdf->SetFont('Arial','',7.5);
    $pdf->SetXY(50, 17);
    $pdf->Image('COFCTE01.jpg',10,10,195,248,'jpg');
    $pdf->Cell(40,10,$nCliente);
    $pdf->SetXY(12,157.5);
    $pdf->Cell(40,10,$direccion);
    $pdf->SetXY(50,160.5);
    $pdf->Cell(40,10,$delegacion);
    $pdf->SetXY(35,172);
    $pdf->Cell(40,10,$correo);
    $pdf->AddPage();
    $pdf->Image('COFCTE02.jpg',10,10,195,248,'jpg');
    $pdf->Output();
?>
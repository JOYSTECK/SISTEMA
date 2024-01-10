<?php

require "conexion_f.php";
require "fpdf/fpdf.php"; 

$sql = "SELECT id, N_C, D_C, NT, MONTO, F_I, F_F FROM deudores";
$resultado = $mysqli->query($sql);

$pdf = new FPDF("L", "mm", "letter");
    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", 9);

    $pdf->Cell(250, 10, "REPORTE DE CLIENTES DEUDORES", 1, 1, "C");

    $pdf->Cell(10, 5, "Id", 1, 0, "C");
    $pdf->Cell(70, 5, "Nombre Completo", 1, 0, "C");
    $pdf->Cell(40, 5, "Telefono", 1, 0, "C");
    $pdf->Cell(30, 5, "Monto", 1, 0, "C");
    $pdf->Cell(50, 5, "Fecha Inicial", 1, 0, "C");
    $pdf->Cell(50, 5, "Fecha Final", 1, 1, "C");

    $pdf->SetFont("Arial", "", 9);
    while ($fila = $resultado->fetch_assoc()) {
        $pdf->Cell(10, 5, $fila['id'], 1, 0, "C");
        $pdf->Cell(70, 5, mb_convert_encoding($fila['N_C'], 'ISO-8859-1', 'UTF-8'), 1, 0, "C");
        $pdf->Cell(40, 5, $fila['NT'], 1, 0, "C");
        $pdf->Cell(30, 5, $fila['MONTO'], 1, 0, "C");
        $pdf->Cell(50, 5, $fila['F_I'], 1, 0, "C");
        $pdf->Cell(50, 5, $fila['F_F'], 1, 1, "C");
    }

    $pdf->Output();
?>
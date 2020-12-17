<?php
require('fpdf/fpdf.php');
session_start();
if ($_SESSION['rol_name'] != 'Tutor') {
    header('location:../../index.php');
}
class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {

        // Arial bold 15
        $this->SetFont('Arial', 'B', 20);
        // Movernos a la derecha
        $this->Cell(50);
        // Título
        $this->Cell(80, 10, 'Boleta de calificaciones', 0, 0, 'C');
        // Salto de línea
        $this->Ln(20);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, utf8_decode('Página') . $this->PageNo() . '/1', 0, 0, 'C');
    }
}

//Obtener los datos de la DB
include_once '../../../vendor/autoload.php';
include_once '../../database/database.php';

$calificaciones = $database::table('calificaciones AS c')
    ->join('asignatura AS a', 'c.AsignaturaId', '=', 'a.AsignaturaId')
    ->where('AlumnoId', $_GET['id'])
    ->get();


$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$alumno = $database::table('alumno as a')->where('AlumnoId', $_GET['id'])
    ->join('grupos as g', 'a.GrupoId', '=', 'g.GrupoId')
    ->join('profesor as p', 'g.ProfesorId', '=', 'p.ProfesorId')
    ->select(
        'a.AlumnoId',
        'a.Nombre',
        'a.Apellidos',
        'p.Nombre AS NombreP',
        'p.Apellidos AS ApellidosP',
        'g.GradoId',
        'g.GrupoId',
        'g.Valor'

    )
    ->get();
//Datos del profesor y Alumno
foreach ($alumno as $item) {
    $pdf->Cell(48, 10, utf8_decode('Nombre del profesor :'), 0, 0, 'C');
    $pdf->Cell(30, 10, utf8_decode($item->NombreP), 0, 0, 'C');
    $pdf->Cell(25, 10, utf8_decode($item->ApellidosP), 0, 1, 'C');
    $pdf->Cell(46, 10, utf8_decode('Nombre del Alumno :'), 0, 0, 'C');
    $pdf->Cell(40, 10, utf8_decode($item->Nombre), 0, 0, 'C');
    $pdf->Cell(40, 10, utf8_decode($item->Apellidos), 0, 1, 'C');
    $pdf->Cell(18, 10, utf8_decode('Grado :'), 0, 0, 'C');
    $pdf->Cell(85, 10, utf8_decode($item->GradoId), 0, 1, 'C');
    $pdf->Cell(18, 10, utf8_decode('Grupo :'), 0, 0, 'C');
    $pdf->Cell(85, 10, utf8_decode($item->Valor), 0, 1, 'C');
}
$pdf->Ln(20);

//Inicio de la tabla
$acum = 0;
$pdf->Cell(100, 10, utf8_decode('Asignatura'), 1, 0, 'C', 0);
$pdf->Cell(90, 10, utf8_decode('Calificación Final'), 1, 1, 'C', 0);
foreach ($calificaciones as $item => $value) {
    $acum += $value->Calificacion;
    $pdf->Cell(100, 10, utf8_decode($value->Nombre), 1, 0, 'C', 0);
    $pdf->Cell(90, 10, utf8_decode($value->Calificacion), 1, 1, 'C', 0);
}
$pdf->Cell(135, 10, utf8_decode('Promedio Final'), 0, 0, 'R');
$pdf->Cell(12, 10, utf8_decode($acum / 6), 0, 0, 'R');


$pdf->Output('boleta.pdf','D');
$pdf->Output();
<?php
require('fpdf181/fpdf.php');
include "datosConexion.php";

$id = $_GET['id'];
$idp = $_GET['idp'];
$mid_x = 135;

$sql = "SELECT receta FROM actualizar_paciente WHERE id='$id'";
$sql2 = "SELECT nombre FROM info_paciente WHERE id='$idp'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $receta = $row["receta"];
    }
}

$result2 = $conexion->query($sql2);

if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
        $nombre = $row["nombre"];
    }
}

$conexion->close();

class PDF extends FPDF{
// Cabecera de página
    function Header(){
        // Logo
        $this->Image('images/pqq.jpg',10,8,25);
        // Arial bold 15
        $this->SetFont('Arial','B',8);
        $this->Cell(10,10,'Logo',10,10,'C');
        $this->SetFont('Arial','B',13);

        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30,10,'DR. CHRISTIAN ALVAREZ CAMARENA',0,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(-30,25,'ORTOPEDIA Y TAUMATOLOGIA',0,0,'C');
        $this->Cell(30,35,'ORTOPEDIA PEDIATRICA',0,0,'C');
        $this->SetFont('Arial','B',8);
        $this->Cell(130,-15,'Torre Medica Cima',0,0,'C');
        $this->Line(10, 50 , 200, 50);  //Horizontal
        // Salto de línea
        $this->Ln(40);
    }

    // Pie de página
    function Footer(){
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Helvetica','I',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',13);
$pdf->Cell(17,10,'Nombre: ',10,10,'C');
$pdf->Cell(20);
$pdf->Cell(20,-10, $nombre ,0,10);
$pdf->Ln(20);
$pdf->Cell(15);
$pdf->MultiCell(0,10,$receta);

$pdf->Output();
?>

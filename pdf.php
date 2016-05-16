<?php
require('fpdf181/fpdf.php');
include "datosConexion.php";

$id = $_GET['id'];
$idp = $_GET['idp'];

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
        //$this->Image('logo_pb.png',10,8,33);
        // Arial bold 15
        $this->SetFont('Courier','B',20);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30,10,'RECETA',0,0,'C');
        $this->SetFont('Arial','B',15);
        $this->Cell(.5,25,'Dr. Christian Alvarez',0,0,'C');
        // Salto de línea
        $this->Ln(20);
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
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,$nombre ,0,1);
$pdf->Cell(0,10,$receta,0,1);
$pdf->Output();
?>
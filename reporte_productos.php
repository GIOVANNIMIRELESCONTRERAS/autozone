<?php
require('/fpdf/fpdf.php');

class PDF extends FPDF
{
     
	 function Header()
   {
      $this->Image('imagenes/2.jpg',120,8,80);
      $this->Line(200,35,20,35);
   }
function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','B',8);
    $this->Line(200,260,20,260);
    $this->Cell(0,10,'Todos los Derechos Reservados 2016',0,0,'C');
	}
}
 $idproducto=$_GET['idproducto'];
 include('conexion.php');
 $consulta="select * from productos where idproducto like '$idproducto'";
                 $resultado=mysqli_query($conn,$consulta);
                    while($lista=mysqli_fetch_array($resultado)){
    $pdf = new PDF();
    $pdf->AddPage('P', 'Letter'); 
    $pdf->SetFont('Arial','B',20); 
	$pdf->SetXY(75,60);

	$pdf->cell(50,8,'idproducto',0,0,'R');
	$pdf->SetFont('Arial','B',12); 
	$pdf->SetXY(75,80);

	$pdf->cell(20,8,'nombre:',0,0,'R');
	$pdf->cell(20,8,$lista['nombre'],1,1);
              $pdf->SetXY(75,90);
	$pdf->cell(20,8,'categoria:',0,0,'R');
	$pdf->cell(60,8,$lista['categoria'],1,1);
$pdf->SetXY(75,100);
	$pdf->cell(20,8,'precio:',0,0,'R');
	$pdf->cell(20,8,$lista['precio'],1,1);
	$pdf->SetXY(75,110);

	$pdf->cell(20,8,'marca:',0,0,'R');
	$pdf->cell(60,8,$lista['marca'],1,1);
	



 
    $pdf->Output(); 
}
?>
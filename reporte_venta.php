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
 $idempleado=$_GET['idempleado'];
 include('conexion.php');
 $consulta="select * from ventas where idempleado like '$idempleado'";
                 $resultado=mysqli_query($conn,$consulta);
                    while($lista=mysqli_fetch_array($resultado)){
    $pdf = new PDF();
    $pdf->AddPage('P', 'Letter'); 
	
	
    $pdf->SetFont('Arial','B',20); 
	$pdf->SetXY(75,60);

	$pdf->cell(50,8,'idempleado',0,0,'R');
	$pdf->SetFont('Arial','B',12); 
	$pdf->SetXY(75,80);

	$pdf->cell(20,8,'empleado:',0,0,'R');
	$pdf->cell(20,8,$lista['empleado'],1,1);
    $pdf->SetXY(75,90);
	$pdf->cell(20,8,'productos:',0,0,'R');
	$pdf->cell(60,8,$lista['productos'],1,1);
$pdf->SetXY(75,100);
	$pdf->cell(20,8,'total:',0,0,'R');
	$pdf->cell(20,8,$lista['total'],1,1);
	$pdf->SetXY(75,110);

	$pdf->cell(20,8,'idproducto:',0,0,'R');
	$pdf->cell(60,8,$lista['idproducto'],1,1);
	



 
    $pdf->Output(); 
}
?>
<?php

require('./fpdf.php');

class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {
      include '../conexion.php';//llamamos a la conexion BD

      $this->Image('logo.png', 175, 5,30); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(45); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      $this->Cell(110, 15, utf8_decode('JULIO ESTUPIÑAN'), 1, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
      $this->Ln(5); // Salto de línea
      $this->SetTextColor(103); //color

      /* TELEFONO */
      $this->Cell(30);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(59, 10, utf8_decode("Teléfono : "), 0, 0, '', 0);
      $this->Ln(5);

      /* COREEO */
      $this->Cell(30);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("Correo : "), 0, 0, '', 0);
      $this->Ln(5);

      /* COREEO */
      $this->Cell(30);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("C.I : "), 0, 0, '', 0);
      $this->Ln(10);

      /* TITULO DE LA TABLA */
      //color
      $this->SetTextColor(23, 32, 42);
      $this->Cell(50); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, utf8_decode("REPORTE DE PAGOS "), 0, 1, 'C', 0);
      $this->Ln(7);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(88, 214, 141); //colorFondo
      $this->SetTextColor(253, 254, 254); //colorTexto
      $this->SetDrawColor(44, 62, 80); //colorBorde
      $this->SetFont('Arial', 'B', 11);
      $this->Cell(10, 10, utf8_decode('Nº'), 1, 0, 'C', 1);
      $this->Cell(35, 10, utf8_decode('NOMBRE'), 1, 0, 'C', 1);
      $this->Cell(53, 10, utf8_decode('MES'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('MONTO'), 1, 0, 'C', 1);
      $this->Cell(40, 10, utf8_decode('FORMA DE PAGO'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('DESCRIPCIÓN'), 1, 1, 'C', 1);
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

include '../conexion.php';
$consulta_info = $mysqli->query("select * from pagos");//traemos datos de la empresa desde BD
$dato_info = $consulta_info->fetch_object();
/* CONSULTA INFORMACION DEL HOSPEDAJE */

$pdf = new PDF();
$pdf->AddPage(); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas

$i = 0;
$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(44, 62, 80); //colorBorde
$consulta_reporte_residentes = $mysqli->query(" SELECT * FROM pagos");

while ($datos_reporte = $consulta_reporte_residentes->fetch_object()) {      
   
$i = $i + 1;
/* TABLA */
$pdf->Cell(10, 10, utf8_decode("$i"), 1, 0, 'C', 0);
$pdf->Cell(35, 10, utf8_decode("$datos_reporte->RESI_NOMB"), 1, 0, 'C', 0);
$pdf->Cell(53, 10, utf8_decode("$datos_reporte->PAGO_MESS"), 1, 0, 'C', 0);
$pdf->Cell(30, 10, utf8_decode("$datos_reporte->PAGO_MONT"), 1, 0, 'C', 0);
$pdf->Cell(40, 10, utf8_decode("$datos_reporte->PAGO_TIPO"), 1, 0, 'C', 0);
$pdf->Cell(30, 10, utf8_decode("$datos_reporte->PAGO_DESC"), 1, 1, 'C', 0);
}

$pdf->Output('Pagos.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)

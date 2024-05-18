<?php
require('fpdf186/fpdf.php');
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id_pago = $_GET['id'];

    $sql = "SELECT * FROM pagos WHERE id = $id_pago";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $dataRow = $result->fetch_assoc();

        // Crear instancia de FPDF
        $pdf = new FPDF();
        $pdf->AddPage();

        # Logo de la empresa formato png #
        $pdf->Image('./img/logo.png', 140, 10, 45, 40, 'PNG');

        # Encabezado y datos de la empresa #
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->SetTextColor(32, 100, 210);
        $pdf->Cell(0, 10, utf8_decode('Ciudadela Julio Estupiñan'), 0, 0, 'L');

        $pdf->Ln(9);

        $pdf->SetFont('Arial', '', 10);
        $pdf->SetTextColor(39, 39, 51);
        $pdf->Cell(150, 9, iconv("UTF-8", "ISO-8859-1", "RUC: 0000000000"), 0, 0, 'L');

        $pdf->Ln(5);

        $pdf->Cell(150, 9, iconv("UTF-8", "ISO-8859-1", "Direccion Julio Estupiñan"), 0, 0, 'L');

        $pdf->Ln(5);

        $pdf->Cell(150, 9, iconv("UTF-8", "ISO-8859-1", "Teléfono: 00000000"), 0, 0, 'L');

        $pdf->Ln(5);

        $pdf->Cell(150, 9, iconv("UTF-8", "ISO-8859-1", "Email: julioestupiñan@ejemplo.com"), 0, 0, 'L');

        $pdf->Ln(10);

        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(30, 7, iconv("UTF-8", "ISO-8859-1", "Fecha de emisión:"));
        $pdf->SetTextColor(97, 97, 97);
        $pdf->Cell(116, 7, utf8_decode(date("d/m/Y h:i A")), 0, 0, 'L');


        $pdf->Ln(7);

        $pdf->SetFont('Arial', '', 10);
        $pdf->SetTextColor(39, 39, 51);
        $pdf->Cell(13, 7, iconv("UTF-8", "ISO-8859-1", "Cliente:"), 0, 0);
        $pdf->SetTextColor(97, 97, 97);
        $pdf->Cell(60, 7, iconv("UTF-8", "ISO-8859-1", $dataRow['RESI_NOMB']), 0, 0, 'L');
        $pdf->SetTextColor(39, 39, 51);
        $pdf->Cell(8, 7, iconv("UTF-8", "ISO-8859-1", "Doc: "), 0, 0, 'L');
        $pdf->SetTextColor(97, 97, 97);
        $pdf->Cell(60, 7, iconv("UTF-8", "ISO-8859-1", "DNI: 00000000"), 0, 0, 'L');
        $pdf->SetTextColor(39, 39, 51);
        $pdf->Cell(7, 7, iconv("UTF-8", "ISO-8859-1", "Tel:"), 0, 0, 'L');
        $pdf->SetTextColor(97, 97, 97);
        $pdf->Cell(35, 7, iconv("UTF-8", "ISO-8859-1", "00000000"), 0, 0);
        $pdf->SetTextColor(39, 39, 51);

        $pdf->Ln(7);

        $pdf->SetTextColor(39, 39, 51);
        $pdf->Cell(6, 7, iconv("UTF-8", "ISO-8859-1", "Dir:"), 0, 0);
        $pdf->SetTextColor(97, 97, 97);
        $pdf->Cell(109, 7, iconv("UTF-8", "ISO-8859-1", "JULIO ESTUPIÑAN"), 0, 0);

        $pdf->Ln(9);

        # Tabla de productos #
        $pdf->SetFont('Arial', '', 8);
        $pdf->SetFillColor(23, 83, 201);
        $pdf->SetDrawColor(23, 83, 201);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(85, 8, iconv("UTF-8", "ISO-8859-1", "Descripción"), 1, 0, 'C', true);
        $pdf->Cell(25, 8, iconv("UTF-8", "ISO-8859-1", "Mes"), 1, 0, 'C', true);
        $pdf->Cell(19, 8, iconv("UTF-8", "ISO-8859-1", "Monto"), 1, 0, 'C', true);
        $pdf->Cell(30, 8, iconv("UTF-8", "ISO-8859-1", "Tipo"), 1, 0, 'C', true);
        $pdf->Cell(30, 8, iconv("UTF-8", "ISO-8859-1", "Forma de Pago"), 1, 0, 'C', true);

        $pdf->Ln(8);


        $pdf->SetTextColor(39, 39, 51);



        /*----------  Detalles de la tabla  ----------*/
        $pdf->Cell(85, 7, iconv("UTF-8", "ISO-8859-1", $dataRow['PAGO_DESC']), 'L', 0, 'C');
        $pdf->Cell(25, 7, iconv("UTF-8", "ISO-8859-1", $dataRow['PAGO_MESS']), 'L', 0, 'C');
        $pdf->Cell(19, 7, iconv("UTF-8", "ISO-8859-1", $dataRow['PAGO_MONT']), 'L', 0, 'C');
        $pdf->Cell(30, 7, iconv("UTF-8", "ISO-8859-1", $dataRow['PAGO_TIPP']), 'LR', 0, 'C');
        $pdf->Cell(30, 7, iconv("UTF-8", "ISO-8859-1", $dataRow['PAGO_TIPO']), 'LR', 0, 'C');
        $pdf->Ln(7);

        /*----------  Fin Detalles de la tabla  ----------*/

        $pdf->SetFont('Arial', 'B', 9);

        # Impuestos & totales #
        $pdf->Cell(100, 7, iconv("UTF-8", "ISO-8859-1", ''), 'T', 0, 'C');
        $pdf->Ln(7);

        $pdf->Ln(15);

        // Firma
        $pdf->Cell(0, 10, utf8_decode('______________________'), 0, 1, 'C');
        $pdf->Cell(0, 10, utf8_decode('FIRMA'), 0, 1, 'C');


        // Salida del PDF
        $pdf->Output('D', 'ReciboPago_' . $id_pago . '.pdf');
    } else {
        echo "Pago no encontrado";
    }
}

$conn->close();

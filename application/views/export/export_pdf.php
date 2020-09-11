<?php
//============================================================+
// File name   : example_005.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 005 for TCPDF class
//               Multicell
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Multicell
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
/*require_once('tcpdf_include.php');*/

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Rahmat Saputra');
$pdf->SetTitle('© 2019 Rahmat Saputra. All Rights Reserved');
$pdf->SetSubject('Table Pemeringkatan Skor Akhir');
$pdf->SetKeywords('Table, Pemeringkatan, Skor Akhir');

// set default header data
/*$pdf->SetHeaderData(PDF_HEADER_LOGO,PDF_CREATOR, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 005', PDF_HEADER_STRING);*/
$pdf->SetHeaderData(PDF_CREATOR, PDF_HEADER_LOGO_WIDTH,'SPKBrevet', "Jl. Margonda Raya No. 100, Depok 16424\nTelepon : (021) 788 81112 ext:110");

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
  require_once(dirname(__FILE__).'/lang/eng.php');
  $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
/*$pdf->SetFont('times', '', 10);*/

// add a page
$pdf->AddPage();

// set cell padding
/*$pdf->setCellPaddings(1, 1, 1, 1);*/

// set cell margins
/*$pdf->setCellMargins(1, 1, 1, 1);*/

// set color for background
/*$pdf->SetFillColor(255, 255, 127);*/

$title = <<<E0D
<h3>Table Pemeringkatan Skor Akhir</h3><br>
E0D;
$pdf->WriteHTMLCell(0,0,'','',$title,0, 1, 0, true, 'C', true);
$table = '<table style="border:1px solid #000; padding:6px;">';
$table .='<tr style="background-color:#ccc;">
            <th style="border:1px solid #000; padding:6px;"><b>Pemeringkatan</b></th>
            <th style="border:1px solid #000; padding:6px;"><b>Nama Alternatif</b></th>
            <th style="border:1px solid #000; padding:6px;"><b>Hasil Perhitungan</b></th>
          </tr>';

$no = 1;
foreach ($nilaib as $row){
$table .= '<tr>
              <td style="border:1px solid #000; padding:6px;">'.'Peringkat '.$no++.'</td>
              <td style="border:1px solid #000; padding:6px;">'.$row->nama_alternatif.'</td>
              <td style="border:1px solid #000; padding:6px;">'.$row->rating.'</td>
          </tr>';
}

$table .= '</table>';
$pdf->WriteHTMLCell(0,0,'','', $table,0, 1, 0, true, 'C', true);
 

// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
ob_clean();
$pdf->Output('Table Pemeringkatan Skor Akhir.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+

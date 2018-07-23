<?php
//============================================================+
// File name   : example_002.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 002 for TCPDF class
//               Removing Header and Footer
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
 * @abstract TCPDF - Example: Removing Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 002');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

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
$pdf->SetFont('times', 10);

// add a page
$pdf->AddPage();

// set some text to print
$html = <<<EOD

<dl>
	<dt>Oleh        : Komting Kelas</dt>
	<dt>Hal        : Peminjaman Ruangan</dt>
</dl>

<dl>
	<dt>Kepada</dt> 
	<dt>Kepala TU Fakultas Ilmu Komputer</dt>
	<dt>Universitas Dian Nuswantoro</dt>
	<dt>Di tempat</dt>
</dl>
<dl>
	<dt>Dengan hormat,</dt> 
	<dd>Sehubungan dengan diadakanya Pergantian jadwal matakuliah, kami atas nama perwakilan kelas</dd> 
	<dt>bermaksud untuk memohon izin untuk meminjam ruang kelas di gedung H, pada :</dt></dl><p></p>
EOD;
$pdf->writeHTML($html, true, false, true, false, '');

// $html = <<<EOD
// <dl>	
//     <dd>Hari/Tanggal        : Minggu, 19 November 2017</dd>
//     <dd>Waktu            : 06.00 - 13.00</dd>
//     <dd>Tempat            : D.5.2</dd>
// 	<dd>Contact Person    : Rizki Mufti Ilmawan (082217808429)</dd></dl>
// EOD;
// $pdf->writeHTML($html, true, false, true, false, '');
$table = '<table>';
$table .= '<tr>
				<th style="border: 0px solid #000 ;width:100px;">Nim</th>
				<th style="border: 0px solid #000;width:100px;">Nama Peminjam</th>
				<th style="border: 0px solid #000;width:100px;">Nama Dosen</th>
				<th style="border: 0px solid #000;width:100px;">Nama Makul</th>
				<th style="border: 0px solid #000;">Tanggal</th>
				<th style="border: 0px solid #000;">Jam</th>
				<th style="border: 0px solid #000;">Ruang kelas</th>
			</tr>';
$no = 1;
foreach($produk as $row){
	$table .='<tr>
		<td style="border: 0px solid #000;">'.$row->id_user.'</td>
		<td style="border: 0px solid #000;">'.$row->nama_peminjam.'</td>
		<td style="border: 0px solid #000;">'.$row->nama_dosen.'</td>
		<td style="border: 0px solid #000;">'.$row->nama_makul.'</td>
		<td style="border: 0px solid #000;">'.$row->tanggal.'</td>
		<td style="border: 0px solid #000;">'.$row->jam.'</td>
		<td style="border: 0px solid #000;">'.$row->nama_ruangkelas.'</td>
	</tr>';
}
$table .= '</table>';
$pdf->writeHTML($table, true, false, true, false, 'C');

$html = <<<EOD
Demikian surat permohonan ini kami sampaikan, atas perhatian dan bantuannya kami ucapkan terima kasih.
<p>Kepala TU Fakultas Ilmu Komputer</p>
<p></p>
<p></p>
<p></p>
<dl>
<dt>xxxxxxx xxxxxxx</dt>
<dt>NPP :xxx.xxxx.xxxxx</dt>
</dl>

EOD;

// print a block of text using Write()
// $pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);
$pdf->writeHTML($html, true, false, true, false, '');

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('Peminjaman_ruang.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+

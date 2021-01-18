<?php
include "../conn.php";
require('../fpdf17/fpdf.php');

//Menampilkan data dari tabel di database

$result=mysql_query("SELECT * FROM pengunjung ORDER BY id ASC") or die(mysql_error());

//Inisiasi untuk membuat header kolom
//$column_id = "";
$column_nama = "";
$column_cari = "";
$column_tglkunjung = "";
$column_jamkunjung = "";
$column_jenkel = "";
$column_kelas= "";


//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
	//$id = $row["id"];
    $nama = $row["nama"];
    $cari = $row["cari"];
    $tgl_kunjung= $row["tgl_kunjung"];
    $jam_kunjung= $row["jam_kunjung"];
    $kelas = $row["kelas"];
	$jenkel = $row["jk"];
 
    

	//$column_id = $column_id.$id."\n";
    $column_nama = $column_nama.$nama."\n";
    $column_cari = $column_cari.$cari."\n";
    $column_tglkunjung = $column_tglkunjung.$tgl_kunjung."\n";
    $column_jamkunjung = $column_jamkunjung.$jam_kunjung."\n";
    $column_kelas = $column_kelas.$kelas."\n";
    $column_jenkel = $column_jenkel.$jenkel."\n";
    

//Create a new PDF file
$pdf = new FPDF('P','mm',array(220,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
$pdf->Image('../img/logo.png',10,10,-175);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(80);
$pdf->Cell(30,10,'DATA PENGUNJUNG',0,0,'C');
$pdf->Ln();
$pdf->Cell(80);
$pdf->Cell(30,10,'SisPusWeb SMA PGRI 56',0,0,'C');
$pdf->Ln();

}
//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,180,230);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(50,8,'Nama',1,0,'C',1);
$pdf->SetX(55);
$pdf->Cell(45,8,'Cari Buku',1,0,'C',1);
$pdf->SetX(100);
$pdf->Cell(25,8,'Tgl Kunjung',1,0,'C',1);
$pdf->SetX(125);
$pdf->Cell(25,8,'Jam Kunjung',1,0,'C',1);
$pdf->SetX(150);
$pdf->Cell(25,8,'Kelas',1,0,'C',1);
$pdf->SetX(175);
$pdf->Cell(40,8,'jenis Kelamin',1,0,'C',1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(50,6,$column_nama,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(55);
$pdf->MultiCell(45,6,$column_cari,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(100);
$pdf->MultiCell(25,6,$column_tglkunjung,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(125);
$pdf->MultiCell(25,6,$column_jamkunjung,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(150);
$pdf->MultiCell(25,6,$column_kelas,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(175);
$pdf->MultiCell(40,6,$column_jenkel,1,'C');

$pdf->Output();
?>

<?php


/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Include PHPExcel */
require_once dirname(__FILE__) . '/Classes/PHPExcel.php';

require_once 'config.php';
include("../include/dbcommon.php");


$to = date("Y-m-d", strtotime($_GET['to']));
$from = date("Y-m-d", strtotime($_GET['from']));  

$dari = date("d/m/Y",strtotime($_GET['from']));

$hingga = date("d/m/Y",strtotime($_GET['to']));  

$kategori = $_GET['kategori'];

if($_GET['kategori'] == 'Semua')
{
 $kategori2 = " ";
}
else
{
 $kategori2 = " AND kategori = '".$_GET['kategori']."'";
}


//translator

$sql = "SELECT * from pejawatan_staffdetails";
$qid = mysql_query($sql);
while($data = mysql_fetch_array($qid))
{
$pendaftar[$data['staff_id']] = $data['name'];
}




//all border
$styleThinBlackBorderOutline = array(
	'borders' => array(
	
	'allborders' => array(
	
			'style' => PHPExcel_Style_Border::BORDER_THIN,
			'color' => array('argb' => 'FF000000'),
		),
	),
);


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();


// Add some data
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('G1', "PEJABAT DAERAH/TANAH SEPANG ")
            ->setCellValue('G2', "L1 : Laporan Surat Mengikut Kategori ") 
            ->setCellValue('G3', "Kategori: $kategori ") 
            ->setCellValue('G4', "Dari $dari hingga $hingga ") 
            
            
            ->setCellValue('B6', 'Bil')           
            ->setCellValue('C6', 'Status')
            ->setCellValue('D6', 'Tarikh Kemasukan')
            ->setCellValue('E6', 'Tarikh Surat')          
            ->setCellValue('F6', 'Tarikh Terima ')
            ->setCellValue('G6', 'Pendaftar')
            ->setCellValue('H6', 'No Rujukan')
            ->setCellValue('I6', 'Kategori')
            ->setCellValue('J6', 'Perkara '); 

//start row 
$row = 7;
mysql_query("SET sql_mode = ''; ");
$i = 1;
      $sql="SELECT * FROM surat WHERE tarikhKemasukkan >= '$from 00:00:00' AND tarikhKemasukkan <= '$to' $kategori2"; 
      $qid = mysql_query($sql);
      while($data = mysql_fetch_array($qid))
      {             

if($data["TindakanTotal"] == '' || $data["TindakanTotal"] == 'Belum Selesai')
{
$TindakanTotal = "Belum Selesai";

$objPHPExcel->getActiveSheet()->getStyle('C'.$row)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);
}
else
{
$TindakanTotal = $data["TindakanTotal"];

$objPHPExcel->getActiveSheet()->getStyle('C'.$row)->getFont()->getColor()->setARGB('FF008000');
}




$kemasukan = date("d-m-Y",strtotime($data['tarikhKemasukkan']));
$terima = date("d-m-Y",strtotime($data['tarikhSurat']));
$surat = date("d-m-Y",strtotime($data['tarikhTerima']));

        $objPHPExcel->getActiveSheet()->SetCellValue('B'.$row, $i++);
        $objPHPExcel->getActiveSheet()->SetCellValue('C'.$row, $TindakanTotal);
        $objPHPExcel->getActiveSheet()->SetCellValue('D'.$row, $kemasukan);
        $objPHPExcel->getActiveSheet()->SetCellValue('E'.$row, $surat);
        $objPHPExcel->getActiveSheet()->SetCellValue('F'.$row, $terima);
        $objPHPExcel->getActiveSheet()->SetCellValue('G'.$row, $pendaftar[$data['pendaftar']]);
        $objPHPExcel->getActiveSheet()->SetCellValue('H'.$row, $data['rujukanSurat']);
        $objPHPExcel->getActiveSheet()->SetCellValue('I'.$row, $data['kategori']);
        $objPHPExcel->getActiveSheet()->SetCellValue('J'.$row, $data['RingkasanKandungan']);

   //set border
$objPHPExcel->getActiveSheet()->getStyle('B6:J'.$row)->applyFromArray($styleThinBlackBorderOutline);


        $row++;    

 
      }

//count semua
      $sql2 ="SELECT count(1) FROM surat WHERE tarikhKemasukkan >= '$from 00:00:00' AND tarikhKemasukkan <= '$to' $kategori2"; 
      $qid2 = mysql_query($sql2);
      $data2 = mysql_fetch_array($qid2);

      $semua = $data2['count(1)'];

//count selesai
      $sql3 ="SELECT count(1) FROM surat WHERE tarikhKemasukkan >= '$from 00:00:00' AND tarikhKemasukkan <= '$to' $kategori2   AND TindakanTotal = 'Selesai'"; 
      $qid3 = mysql_query($sql3);
      $data3 = mysql_fetch_array($qid3);

      $selesai = $data3['count(1)'];
      
//count belum selesai
if($semua == '0')
{
$belumselesai = '0';
}
else
{
$belumselesai = $semua - $selesai;       
}      

$rowx = $row + 2; 
$rowx2 = $row + 3;
$rowx3 = $row + 4;
$rowx4 = $row + 5;
$objPHPExcel->setActiveSheetIndex(0)

            ->setCellValue('C'.$rowx, 'Bilangan Surat')         
            ->setCellValue('C'.$rowx2, 'Belum Selesai') 
            ->setCellValue('D'.$rowx2, $belumselesai) 
            ->setCellValue('C'.$rowx3, 'Selesai') 
            ->setCellValue('D'.$rowx3, $selesai)
            ->setCellValue('C'.$rowx4, 'Jumlah') 
            ->setCellValue('D'.$rowx4, $semua);  

//border
$objPHPExcel->getActiveSheet()->getStyle('C'.$rowx2.':D'.$rowx4)->applyFromArray($styleThinBlackBorderOutline);

//bg color
$objPHPExcel->getActiveSheet()->getStyle('C'.$rowx2)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);
$objPHPExcel->getActiveSheet()->getStyle('C'.$rowx3)->getFont()->getColor()->setARGB('FF008000');
//$objPHPExcel->getActiveSheet()->getStyle('C'.$rowx4.':D'.$rowx4)->getFill()->getStartColor()->setARGB('A6A6A6');

//bg color

function cellColor($cells,$color){
    global $objPHPExcel;

    $objPHPExcel->getActiveSheet()->getStyle($cells)->getFill()->applyFromArray(array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array(
             'rgb' => $color
        )
    ));
}

cellColor('B6:J6', 'FF7C80');

cellColor('C'.$rowx4.':D'.$rowx4, 'A6A6A6');

//make wording center
$objPHPExcel->getActiveSheet()->getStyle('G1:G4')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('G1:G4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


//set bold
$objPHPExcel->getActiveSheet()->getStyle('G1:G4')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B6:J6')->getFont()->setBold(true);

//set width
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);                                                                        
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(17);  
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);  
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(25);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(13);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(50);

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="LaporanMengikutKategori.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;

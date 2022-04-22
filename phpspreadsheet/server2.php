<?php

require 'Vendor/autoload.php';
include_once '../lib/conf/connection.php';

use  PhpOffice\PhpSpreadsheet\Spreadsheet;
use  PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use  PhpOffice\PhpSpreadsheet\IOFactory;




$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet ->setCellValue('A1','     Id');
$sheet ->setCellValue('A2','vac_1');

$sheet ->setCellValue('C1','       NOMBRE');
$sheet ->setCellValue('C2','Michael andres');


$sheet ->setCellValue('F1','      APELLIDO');
$sheet ->setCellValue('F2','cuadrado rodriguez');


$sheet ->setCellValue('I1','      NUMERO DOCUMENTO');
$sheet ->setCellValue('I2',  '       11155465');


$sheet ->setCellValue('L1','      AÑOS DE EXPERIENCIA LABORAL');
$sheet ->setCellValue('L2','                  0');


$filename ='Lista Aspirante'.time().'xlsx';

header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="'.$filename. date("d-m-Y") . '.xlsx"');
header ('Cache-Control: max-age = 0' );

header ('Cache-Control: max-age = 1' );

ob_end_clean();
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');

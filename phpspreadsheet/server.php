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
$sheet ->setCellValue('A3','vac_5');
$sheet ->setCellValue('A4','vac_6');


$sheet ->setCellValue('C1','       VACANTE');
$sheet ->setCellValue('C2','Ingeniero electricista');
$sheet ->setCellValue('C3','auxiliar de archivo');
$sheet ->setCellValue('C4','ingeniero sistemas');



$sheet ->setCellValue('F1','        FECHA LIMITE DE APLICACION  ');
$sheet ->setCellValue('F2','               2021-07-31');
$sheet ->setCellValue('F3','               2021-07-15');
$sheet ->setCellValue('F4','               2021-07-31');



$sheet ->setCellValue('I1','      DESCRIPCION');
$sheet ->setCellValue('I2','Calcular, seleccionar, operar, evaluar y mantene');
$sheet ->setCellValue('I3','Ayudar en administracion');
$sheet ->setCellValue('I4','mantenimiento en redes ,labores como tecnico ,reparacion , manejo del servidor');


$filename ='Lista vacantes'.time().'xlsx';

header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="'.$filename. date("d-m-Y") . '.xlsx"');
header ('Cache-Control: max-age = 0' );

header ('Cache-Control: max-age = 1' );

ob_end_clean();
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');













?>
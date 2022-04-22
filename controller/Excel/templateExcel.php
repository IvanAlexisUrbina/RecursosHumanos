<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

use phpDocumentor\Reflection\Types\Null_;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Symfony\Component\Validator\Constraints\Length;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Sum;

            $spreadsheet = new Spreadsheet();
            
            $spreadsheet->getProperties()
                ->setTitle('PHP Download')
                ->setSubject('A PHPExcel')
                ->setDescription('A simple download PHP')
                ->setCreator('php-download.com')
                ->setLastModifiedBy('php-download.com');

            $filename = "Reporte.Xlsx";
            
            

            $hoja = $spreadsheet->getActiveSheet();
            //Bordes de los headers de la tabla
            $hoja->setTitle("PRUEBA EXCEL");
            //Encabezado de la tabla
            $hoja->setCellValue("A1","CODIGO");
            $hoja->setCellValue("B1","CLIENTE");
            $hoja->setCellValue("C1","PRODUCTO");
            $hoja->setCellValue("D1","CANTIDAD");
            $hoja->setCellValue("E1","FECHA DE CREACION");
            $hoja->setCellValue("F1","ENCARGADO");

            //$writer = new Xlsx($excel2);

            //$ruta = "Excel/".$filename;

            /*try {
                $writer->save($ruta);
            } catch (Exception $e) {
                echo $e->getMessage();
            }*/
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="'.urlencode($filename).'"');
            header('Cache-Control: max-age=0');

            $objWriter =IOFactory::createWriter($spreadsheet,'Xlsx');
            $objWriter->save('C:/xampp/htdocs/RecursosHumanos/');
            //unlink($ruta);
    
?>
<?php
require '../../web/vendor/autoload.php';
include_once '../../model/Excel/ExcelModel.php';



use phpDocumentor\Reflection\Types\Null_;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Symfony\Component\Validator\Constraints\Length;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Sum;

$obj = new ExcelModel();
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
   //Bordes de los headers de la tabla
   $sheet->getStyle('A1:R1')
   ->getBorders()
   ->getAllBorders()
   ->setBorderStyle(Border::BORDER_THICK)
   ->setColor(new Color('000000'));
 //Celdas combinadas
 $sheet->mergeCells('A1:B1');
 $sheet->mergeCells('C1:E1');
 $sheet->mergeCells('F1:H1');
 $sheet->mergeCells('P1:R1');

//Activar fuente en negrita
$sheet->getStyle('A1:R1')->getFont()->setBold(true);



$sql="SELECT tbl_usuario.usu_id,tbl_usuario.usu_nombre,tbl_usuario.usu_apellido,tbl_usuario.usu_correo,tbl_usuario.usu_telefono,tbl_vacante.id_vacante,tbl_vacante.vac_nombre,tbl_vacante.vac_publicacion,tbl_seleccionado.id_seleccionado,tbl_seleccionado.selec_nombre
FROM  ((tbl_usuario  INNER JOIN tbl_usuariovacante ON tbl_usuario.usu_id=tbl_usuariovacante.usu_id)
                     INNER JOIN tbl_vacante ON tbl_usuariovacante.id_vacante=tbl_vacante.id_vacante)
                     INNER JOIN tbl_seleccionado ON tbl_usuariovacante.id_seleccionado=tbl_seleccionado.id_seleccionado
                     WHERE rol_id='2'";
$listado=$obj->consult($sql);

    $sheet ->setCellValue('A1','     ID_ASPIRANTE');
    $sheet ->setCellValue('C1','       NOMBRE');
    $sheet ->setCellValue('F1','      APELLIDO');
    $sheet ->setCellValue('I1','      CORREO ELECTRONICO');
    $sheet ->setCellValue('L1','      TELEFONO');
    $sheet ->setCellValue('N1','      ESTADO');
    $sheet ->setCellValue('P1','      VACANTE');
    $n=2;
foreach ($listado as $Usu) {
    
    $sheet->mergeCells('A'.$n.':B'.$n.'');
    $sheet->mergeCells('C'.$n.':E'.$n.'');
    $sheet->mergeCells('F'.$n.':H'.$n.'');
    $sheet->mergeCells('I'.$n.':K'.$n.'');
    $sheet->mergeCells('L'.$n.':M'.$n.'');
    $sheet->mergeCells('N'.$n.':O'.$n.'');
    $sheet->mergeCells('P'.$n.':R'.$n.'');
    $sheet ->setCellValue('A'.$n,'ASP_"'.$Usu['usu_id'].'"');
    $sheet ->setCellValue('C'.$n,'"'.$Usu['usu_nombre'].'"');
    $sheet ->setCellValue('F'.$n,'"'.$Usu['usu_apellido'].'"');
    $sheet ->setCellValue('I'.$n,  '"'.$Usu['usu_correo'].'"');
    $sheet ->setCellValue('L'.$n,  '"'.$Usu['usu_telefono'].'"');
    $sheet ->setCellValue('N'.$n,  '"'.$Usu['selec_nombre'].'"');
    $sheet ->setCellValue('P'.$n,  '"'.$Usu['vac_nombre'].'"');
    $n++;
}
$n = $n-1;


//Bordes del uerpo de la tabla
$sheet->getStyle('A1:R'.$n)
        ->getBorders()
        ->getAllBorders()
        ->setBorderStyle(Border::BORDER_THIN)
        ->setColor(new Color('000000'));

$filename ='Lista Aspirante'.time().'xlsx';

header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="'.$filename. date("d-m-Y") . '.xlsx"');
header ('Cache-Control: max-age = 0' );

header ('Cache-Control: max-age = 1' );

ob_end_clean();
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');


?>
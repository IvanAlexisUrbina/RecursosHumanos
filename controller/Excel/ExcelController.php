<?php

include_once '../model/Excel/ExcelModel.php';
require_once 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\IOFactory;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class ExcelController{
        public function postExcel(){

            try {
                require '../controller/Excel/templateExcel.php';
            } catch (Throwable $th) {
                varDumpPre($th);
            }
            
        }

}



?>
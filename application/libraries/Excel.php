<?php
defined('BASEPATH') OR exit('AKSES DITOLAK');
require_once APPPATH ."third_party/vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class Excel
{
    public function read_excel($path){
        $filetype = \PhpOffice\PhpSpreadsheet\IOFactory::identify($path);
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($filetype);
        $xls = $reader->load($path);
        $sheet = $xls->getActiveSheet();
        $last_row = $sheet->getHighestRow();
        $last_col = $sheet->getHighestColumn();
        $data = $sheet->rangeToArray('A1:'.$last_col.$last_row,NULL, TRUE,TRUE,TRUE);
        $output = array('judul'=>$data[1]);
        for ($i=2; $i < $last_row; ++$i) {
            $output['data'][] = $data[$i];
        }
        return $output;
    }
    public function write_excel(){
        $xls = new PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $xls->getSheet(0);
        $data = array(['nama','tetala'],['ahmad','paiton'],['ahmad1','paiton1'],['ahmad2','paiton2']);
        $sheet->fromArray($data, NULL,'A1',false);
        $writer = PhpOffice\PhpSpreadsheet\IOFactory::createWriter($xls,'Xlsx');
       /*  $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($sheet);*/
        // $writer->save('tes.xlsx');
        /* $xls->disconnectWorksheets();
        unset($xls); */
        return $writer;
    }
}

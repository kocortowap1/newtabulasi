<?php
defined('BASEPATH') OR exit('AKSES DITOLAK');
require_once APPPATH ."third_party/vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
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
    public function write_excel($data,$filename){
        $xls = new Spreadsheet();
        $xls->getProperties()
            ->setCreator('UNUJA Online System')
            ->setTitle('Tes buat excel');
        //$data = [['nama','tetala'],['ahmad','paiton'],['ahmad1','paiton1'],['ahmad2','paiton2']];
        $xls->setActiveSheetIndex(0)
            ->fromArray($data, NULL, 'A1', FALSE);
        $xls->getActiveSheet()->setTitle('Tes');
        $xls->setActiveSheetIndex(0);
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
        header('Cache-Control: max-age=0');  // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1'); // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 15 Jul 2019 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0
        $writer = IOFactory::createWriter($xls,'Xlsx');

        $writer->save('php://output');
        exit();
    }
}

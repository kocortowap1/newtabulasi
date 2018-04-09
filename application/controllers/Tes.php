<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {


    public function index(){
        require_once (APPPATH."third_party/vendor/autoload.php");
        //use PhpOffice\PhpSpreadsheet\Reader\IReader
        $path= FCPATH . "files/tes.xlsx";
        $this->load->library('excel');
        $data = $this->excel->read_excel($path);

        /* $filetype = "Xls";
        $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($path);
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
        $xls = $reader->load($path);
        $sheet = $xls->getActiveSheet();
        $last_row = $sheet->getHighestRow();
        $last_col = $sheet->getHighestColumn();
        $data = $sheet->rangeToArray('A1:'.$last_col.$last_row,NULL, TRUE,TRUE,TRUE); */
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        // echo "tes";
    }
    function test(){
        echo "hello World";
    }

}

/* End of file Tes.php */

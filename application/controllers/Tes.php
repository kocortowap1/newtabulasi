<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {


    public function index(){
        require_once (APPPATH."third_party/vendor/autoload.php");
        //use PhpOffice\PhpSpreadsheet\Reader\IReader
        $path= FCPATH . "files/tes.xlsx";
        $this->load->library('excel');
        $data = $this->excel->read_excel($path);


        echo "<pre>";
        print_r($data);
        echo "</pre>";
        // echo "tes";
    }

}

/* End of file Tes.php */

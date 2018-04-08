<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."third_party/vendor/autoload.php";


class Tes extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library('excel');

    }


    public function index(){
        //use PhpOffice\PhpSpreadsheet\Reader\IReader
        $path= FCPATH . "files/tes.xlsx";
        $data = $this->excel->read_excel($path);
        $this->preview($data['data']);
    }
    function buat_excel(){

    //    $xls =  $this->excel->write_excel();
       //$this->preview($xls);
       $data = [['nama','tetala'],['ahmad','paiton'],['ahmad1','paiton1'],['ahmad2','paiton2']];
       $this->excel->write_excel($data,'Contoh');
    }
    function upload($data = null){
        $data = array('data'=>$data);
        $this->load->view('testing',$data);
    }
    function proses_upload(){
        $filename = $this->input->post('file');

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|xls|xlsx';
        $config['max_size']  = '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $upload = $this->upload_file($filename, $config);
        $data['data'] = $upload;
         $this->upload($data);
    }



}

/* End of file Tes.php */

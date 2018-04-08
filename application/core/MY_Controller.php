<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function display($content, $data = array())
    {
        $this->load->helper(array('url','form'));
        $mydata['master_data'] = null;
        $mydata['body'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/layout', $mydata, FALSE);
    }
    function upload_file($filename,  $config = array()){

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload($filename)){
            $data = array('error'=>TRUE, 'errorMsg' => $this->upload->display_errors(), 'data' =>NULL);
        }
        else{
            $data = array('error'=>TRUE, 'errorMsg' =>NULL, 'data' => $this->upload->data());

        }
        return $data;
    }
    function preview($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

/* End of file MY_Controller.php */

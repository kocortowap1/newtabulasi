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
    function excel_upload($save_path, $saved_name) {
       /*  require_once (APPPATH. "third_party/vendor/autoload.php");
        use PhpOffice\PhpSpreadsheet\Spreadsheet;
        use PhpOffice\PhpSpreadsheet\Reader\; */
    }

}

/* End of file MY_Controller.php */

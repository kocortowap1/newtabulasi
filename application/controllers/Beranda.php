<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {

    public function index()
    {
        $data = array();
        $this->display('beranda',$data);
    }
}

/* Beranda of MY_Controller Controllername.php */


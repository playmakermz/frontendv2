<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller
{
    public function index()
    {
        $this->template->load('V_Template', 'V_Fasilitas');
    }

    public function Detail()
    {
        $this->template->load('V_Template', 'V_FasilitasDetail');
    }
}

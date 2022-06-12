<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendidikan extends CI_Controller
{
    public function index()
    {
        $this->template->load('V_Template', 'V_Pendidikan');
    }
}

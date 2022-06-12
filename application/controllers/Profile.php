<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function index()
    {
        $this->template->load('V_Template', 'V_Profile');
    }
    public function Keudes()
    {
        $this->template->load('V_Template', 'V_Keudes');
    }
    public function Peraturan()
    {
        $this->template->load('V_Template', 'V_Peraturan');
    }
    public function Kesejahteraan()
    {
        $this->template->load('V_Template', 'V_Kesejahteraan');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function index()
    {
        $this->template->load('V_Template', 'V_NewsDetails');
    }

    public function PerdaBumdesDiCabut()
    {
        $this->template->load('V_Template', 'V_NewsFirst');
    }
    public function JenisPestisidaCaraKerjaDanDaftarPestisidaSertaStrategiPergilirannya()
    {
        $this->template->load('V_Template', 'V_NewsSecond');
    }
    public function MetodePemberianPupukPadaTanaman()
    {
        $this->template->load('V_Template', 'V_NewsThirt');
    }
}

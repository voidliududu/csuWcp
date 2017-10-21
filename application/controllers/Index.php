<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-21
 * Time: 下午12:52
 */

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('index/index1');
    }
}
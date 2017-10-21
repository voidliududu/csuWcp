<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-14
 * Time: 下午2:21
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    //Products::refreshStudio()
    public function Product_refreshStudio()
    {
        $this->session->set_userdata(['studio' => 9]);
        $this->load->model('Products');
        $result = $this->Products->refreshStudio(false);
        if ($result['flag'] == true)
            echo "success";
        else {
            echo 'fail';
            echo $result['error'];
        }
    }
    //Product::addProduct

    public function Product_addProduct(){
        $_POST['name'] = 'java';
        $_POST['intro'] = 'this is a test information';
        $_POST['cate'] = 1;
        $this->session->set_userdata(['studio' => 9]);
        $this->load->model('Products');
        $result = $this->Products->addProduct();
    }
}
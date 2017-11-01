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
        $this->load->library('Auth');
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
    //auth islogin
    public function testAuthIsLogin(){
        if($this->auth->isLogin())
            echo 'fail';
        else
            echo 'success';
    }

    //auth login
    public function testAuthLogin(){
        $user = new class{
            public $UID = 1;
            public $ACCOUNT = 3;
            public $STU_ID = 2;
            public $PRIVILEGE =1;
        };
        $this->auth->login($user);
        $this->testAuthIsLogin();
    }

    public function getPic(){
        $this->load->helper('form');
        $this->load->library('Uploader');
        $result = $this->uploader->getPic($_FILES);
        var_dump($result);
        $this->load->view('test/upload');
    }

    public function testViewAdmin(){
        $this->load->helper('url');
        $this->load->view('admin/admin');
    }

    public function SuperAdmin() {
        $this->load->helper('url');
        $this->load->view('admin/superAdmin');
    }
    public function testViewShow(){
        $this->load->helper('url');
        $this->load->view('index/index1');
    }
    public function testUsers(){
        $this->load->model("Test");
        $result = $this->Test->testUsers();
        var_dump($result);
    }
    public function testMedia(){
        $this->load->model('Media');
        $_POST['name'] = "hello";
        $_SESSION['STU_ID'] = 1;
        $var = $this->Media->addProduct();
        var_dump($var);
    }
}
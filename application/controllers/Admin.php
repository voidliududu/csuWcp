<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-9-21
 * Time: 下午10:30
 */

defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Users');
        $this->load->model('Studio');
        $this->load->library('session');
        $this->load->helper('form');
    }

    /*
     * @param account password
     *
     * */
    public function login()
    {
        $this->load->helper('form');
        $account = $this->input->post('account');
        $password = $this->input->post('password');
        if($account and $password) {
            $user = $this->Users->signIn($account, $password);
            if ($user['flag'] == true) {
                $user = $user['user'];
                $this->setLogin($user);
                if($user->UID == 5)
                    $this->load->view('admin/superAdmin');
                else
                    $this->load->view('admin/admin');
            } else {
                $this->load->view('admin/login', ['flag' => false]);
            }
        }else{
            $this->load->view('admin/login',['flag' => 'first']);
        }
    }

    //登出并显示登录界面
    public function logout(){
        $this->session->unset_userdata(['userid','username','privilege']);
        $this->load->view('login');
    }

    /*
         * 检查登录状态
         * */
    public function checkLogin(){
        $userData = $this->session->userdata();
        if($userData['userid'] and $userData['studio'] and ($userData['privilege']))
            return true;
        return false;
    }

    /*
     * 检查管理员登录状态
     * */
    public function checkAdminLogin(){
        $userData = $this->session->userdata();
        if($userData['userid'] and $userData['studio'] and ($userData['privilege'] == 5))
            return true;
        return false;
    }

    /*
     * 设置登录状态
     * */
    private function setLogin($user){
        $this->session->set_userdata([
            'userid' => $user->UID,
            'username' => $user->ACCOUNT,
            'studio' => $user->STU_ID,
            'privilege' => $user->PRIVILEGE
        ]);
    }


    /*
     * @param $studio->name,$studio->department
     *
     * */
    public function addStudio(){
        $flag = $this->Studio->addStudio();
        $this->load->view('AddForm/studio',['flag' => $flag['flag']]);
    }
    //todo the empty page
    /*
     * 列出工作室
     * */
    public function listStudio(){
        $studios = $this->Studio->searchAll();
        if($studios['flag'])
            $this->load->view('studio/list',['studios' => $studios['studios']]);
        else {
            $this->load->view('empty');
        }
    }
    /*
     * 列出产品
     * */
    public function listProduct(){
        $this->load->view('product/list');
    }
    /*
     * 显示一个工作室的详细信息
     * */
    //todo 改路由
    public function showStudioInformation($id){
        $studio = $this->Studio->searchById($id);
        if($studio['flag'])
            $this->load->view('studio/discribe',$studio['studio']);

    }
    /*
     * 显示一个产品的信息
     * */
    public function showProductInformation($id){
        $this->load->view('product/discribe');
    }

    //视图测试模块
    public function testView()
    {
        $this->load->view('admin/superAdmin');
    }
    //模型测试模块
    public function testModel(){
        $this->session->set_userdata(['studio' => '']);
        $this->load->model('Product');
        $this->Test->updatedb();
    }
    public function test(){
//        $this->load->model('Studio');
//        var_dump( $this->Studio->addStudio());
        $this->listStudio();
    }
}
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
        $this->load->library('Auth');
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
                $this->auth->login($user);
                if($user->PRIVILEGE == 5)
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
        $this->auth->logout();
        $this->load->view('login');
    }


    /*
     * 添加工作室
     *
     * */
    public function addStudio(){
        $flag = $this->Studio->addStudio();
        $this->load->view('studio/add',['flag' => $flag]);
    }
    /**
     * 显示更改工作室的界面
     * */
    public function modStudioView($id){
        $result = $this->Studio->searchById($id);
        if($result['flag'] == false){
            echo "没有这样的工作室";
            return;
        } else{
            $this->load->view('studio/modify',['studio' => $result['studio']]);
        }
    }
    /**
     * 修改工作室
     * */
    public function modStudio(){
        $result = $this->Studio->update();
        if($result['flag'] = false){
            echo '<script>alert("修改失败");</script>';
            //$this->modStudio();
        }else{
            echo '<script>alert("修改成功")</script>';
        }
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
     * 列出产品  //todo data
     * */
    public function listProduct($cateid){

        $this->load->view('product/list');
    }
    /*
     * 显示一个工作室的详细信息
     * */
    //todo 改路由
    public function showStudioInformation($id){
        $studio = $this->Studio->searchById($id);
        if($studio['flag'])
            $this->load->view('studio/discribe',['studio' => $studio['studio']]);
    }
    /*
     * 显示一个产品的信息
     * */
    public function showProductInformation($id){
        $this->load->view('product/discribe');
    }
    /**
     * 添加产品的视图
     * @param string $cateid
     *
     * */
    public function addProduct($cateid = null){
        if($cateid == null)
             show_404();
        $addView = [
            '1' => 'product/weMovie/add',
            '2' => 'product/weMusic/add',
            '3' => 'product/weApp/add',
            '4' => 'product/weMag/add',
            '5' => 'product/weCartoon/add',
            '6' => 'product/weAct/add'
        ];
        $this->load->view($addView[$cateid]);
    }
    /**
     * media资源产品的添加
     *
     * */
    public function addMedia(){
        $this->load->model('Media');
        $result = $this->Media->addProduct();
        if($result['flag'] == false) {
//            $this->load->view('errors/html/error_general');
            echo "<script>alert('失败')</script>";
            return;
        }
        echo "<script>alert('成功');</script>";
    }
    /**
     * article资源的添加
     * */
    public function addArticle(){
        $_SESSION['STU_ID'] = 2;
        $this->load->model('Article');
        $result = $this->Article->addProduct();
        if($result['flag'] == false) {
            //$this->load->view('errors/html/error_general');
            echo "<script>alert('失败')</script>";
            return;
        }
        echo "<script>alert('成功');</script>";
    }
    /**
     * image资源的添加
     * */
    public function addImage(){
        $_SESSION['STU_ID'] = 2;
        $this->load->model('Image');
        $result = $this->Image->addProduct();
        if($result['flag'] == false) {
            //$this->load->view('errors/html/error_general');
            echo "<script>alert('失败')</script>";
            return;
        }
        echo "<script>alert('成功');</script>";
    }

    /**
     * 修改产品的视图
     * */
    public function modProductView($cateid,$id){
        $product = $this->Product->searchByCateId($cateid,$id);
        $modView = [
            '1' => 'product/weMovie/modify',
            '2' => 'product/weMusic/modify',
            '3' => 'product/weApp/modify',
            '4' => 'product/weMag/modify',
            '5' => 'product/weCartoon/modify',
            '6' => 'product/weAct/modify'
            ];
        $this->load->view($modView[$cateid],['product' => $product]);
    }
    /**
     * 修改产品
     * */
    public function modProduct($cateid,$id){
        if(in_array($cateid,[1,2,3])){
            $this->load->model('Media');
            $this->Media->updateProduct($id);
        }elseif (in_array($cateid,[4,6])){
            $this->load->model('Article');
            $this->Article->updateProduct($id);
        }elseif ($cateid == 5){
            $this->load->model('Image');
            $this->Image->updateProduct($id);
        }else{
            //todo error page
        }
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
//        $this->listStudio();
        $this->load->model('Test');
        $result = $this->Test->testUsers();
        var_dump($result);
    }
}















































//    /*
//         * 检查登录状态
//         * */
//    public function checkLogin(){
//        $userData = $this->session->userdata();
//        if($userData['userid'] and $userData['studio'] and ($userData['privilege']))
//            return true;
//        return false;
//    }
//
//    /*
//     * 检查管理员登录状态
//     * */
//    public function checkAdminLogin(){
//        $userData = $this->session->userdata();
//        if($userData['userid'] and $userData['studio'] and ($userData['privilege'] == 5))
//            return true;
//        return false;
//    }
//
//    /*
//     * 设置登录状态
//     * */
//    private function setLogin($user){
//        $this->session->set_userdata([
//            'userid' => $user->UID,
//            'username' => $user->ACCOUNT,
//            'studio' => $user->STU_ID,
//            'privilege' => $user->PRIVILEGE
//        ]);
//    }

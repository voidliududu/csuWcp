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
        //$this->load->model('Products');
    }
    /*
     * 主导航页
     * */
    public function index()
    {
        $this->load->view('index/index3');
    }
    /**
     * 主页
     * */
    public function all($cate){
        //$this->load->view('header/head');
        $this->load->view('index/all');
        //$this->showIndexList($cate,1);
        //$this->load->view('footer/foot');
    }
    /**
     * 主页列表
     * */
    public function showIndexList($cate,$page = 1){
        if($cate == 0){
            $this->load->model('Studio');
            $result = $this->Studio->searchAll(4,($page -1) * 4);
            if($result['flag'] == false)
                show_404();
            $items = $result['studios'];
        }else {
            $this->load->model('Products');
            $items = $this->Products->searchByCate($cate, ($page - 1) * 4, 4);
        }
        $this->load->view('index/indexList',['cate' => $cate,'page' =>$page,'items' => $items]);
    }
    /**
     * 显示文章类产品
     * */
    public function showArticle($cate,$page = 1){
        //$this->load->view('header/head');
        if($cate > 6 || $cate < 1)
            show_404();
        $this->load->model('Products');
        $product = $this->Products->searchByCate($cate,$page - 1,5);
        $showView = [
            '1' => 'product/weMovie/show',
            '2' => 'product/weMusic/show',
            '3' => 'product/weApp/show',
            '4' => 'product/weMag/show',
            '5' => 'product/weCartoon/show',
            '6' => 'product/weAct/show'
        ];
        $this->load->view($showView[$cate],['product' => $product]);
    }
    public function searchByCateId($cateid,$id){
        $res = $this->Products->searchByCateId($cateid,$id);
        if($res['flag'] == false)
            $this->load->view('empty');
        $this->load->view();
    }
}
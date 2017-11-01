<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-30
 * Time: 上午1:17
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once "Products.php";
class Article extends Products
{
    public function __construct()
    {
        parent::__construct();

    }
    /**
     * 添加产品
     *
     * */
    public function addProduct(){
        $article['STU_ID'] = $this->session->userdata('STU_ID');
        if($article['STU_ID'] == null)
            return ['flag' =>false,'error' => "session expired"];
        $article['NAME'] = $this->input->post('name');
        if($article['NAME'] == null)
            return ['flag' => false,'error' => 'product name required'];
        $article['AUTHOR'] = $this->input->post('author');
        $article['CATE_ID'] = $this->input->post('cate');
        $article['CREATED'] = date('Y-m-d H:i:s');
        $article['MODIFIED'] = $article['CREATED'];
        $this->db->trans_begin();
        $this->db->insert('PRODUCT',$article);
        $res = $this->uploader->getPic($_FILES);
        if($res['flag'] == false){
            $this->db->trans_rollback();
            return ['flag' => false, 'error' => $res['error']];
        }
        $result['COVER_IMG'] = $res['fileList'][0]['RES_ADDR'];
        $result['PRO_ID'] = $this->db->insert_id();
        $result['CONTENT'] = $this->input->post('describe');
        $this->db->insert('ARTICLE',$result);
        if($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return ['flag' => false,'error' => 'database err'];
        }
        $this->db->trans_commit();
        return ['flag' => true];
    }
//    /**
//     * 修改产品
//     * */
//    public function updateProduct(){
//
//    }
//    /**
//     * 删除产品
//     * */
//    public function delProduct(){
//
//    }
//    /**
//     * 通过id查找产品
//     * */
//    public function searchById($id){
//
//    }
//    /**
//     * 查找所有产品
//     * */
//    public function searchAll($num,$offset){
//
//    }
}
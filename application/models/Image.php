<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-30
 * Time: 上午1:17
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends Products
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Uploader');
    }
    /**
     * 添加产品
     *
     * */
    public function addProduct(){
        $res = parent::addProduct();
        if($res['flag'] == false)
            return $res;
        $product = $res['media'];
        $this->db->trans_begin();
        $this->db->insert('PRODUCT',$product);
        $result = $this->Uploader->getPic();
        if($result['flag'] == false){
            $this->db->trans_rollback();
            return ['flag' => false, 'error' => $result['error']];
        }
        $pro_id = $this->db->insert_id();
        foreach ($result['result'] as $key => $resource){
            $resource['PRO_ID'] = $pro_id;
            $this->db->insert('RESOURCE',$resource);
            if($this->db->trans_status() === false){
                $this->db->trans_rollback();
                return ['flag' => false, 'error' => 'database err'];
            }
            $this->db->trans_commit();
            return ['flag' => true];
        }
    }
    /**
     * 修改产品
     * */
    public function updateProduct(){

    }
    /**
     * 删除产品
     * */
    public function delProduct(){

    }
    /**
     * 通过id查找产品
     * */
    public function searchById($id){

    }
    /**
     * 查找所有产品
     * */
    public function searchAll($num,$offset){

    }
}
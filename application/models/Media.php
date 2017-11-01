<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-30
 * Time: 上午1:16
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Products.php');

class Media extends Products
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
        $media = $res['media'];
        $this->db->trans_begin();
        $this->db->insert('PRODUCT',$media);
        $result = $this->Uploader->getMedia('screenshoot','media');
        if($result['flag'] == false){
            $this->db->trans_rollback();
            return ['flag' => false, 'error' => $result['error']];
        }
        $result = $result['result'];
        $result['PRO_ID'] = $this->db->insert_id();
        $result['INFO'] = $this->input->post('describe');
        $this->db->insert('RESOURCE',$result);
        if($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return ['flag' => false,'error' => 'database err'];
        }
        $this->db->trans_commit();
        return ['flag' => true];
    }
    /**
     * 修改产品
     * */
    public function updateProduct($id){
        $res = parent::updateProduct($id);
        if($res['flag'] == false)
            return $res;
        $media = $res['media'];
        $this->db->trans_begin();
        $this->db->where('ID',$id)->update('PRODUCT',$media);
        $result = $this->Uploader->getMedia('screenshoot','media');
        if($result['flag'] == false){                            //资源上传失败则仍使用原来的资源
            $this->db->trans_commit();
            return ['flag' => true, 'error' => $result['error']];
        }
        $result['PRO_ID'] = $id;
        $result['INFO'] = $this->input->post('describe');
        $this->db->insert('RESOURCE',$result);
        if($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return ['flag' => false,'error' => 'database err'];
        }
        $this->db->trans_commit();
        return ['flag' => true];
    }
    /**
     * 删除产品
     * */
    public function delProduct($id){
        if($this->db->where('ID',$id)->update('PRODUCT',['DELETED' => 1]))
            return ['flag' => true];
        return ['flag' => false, 'error' => 'delete error'];
    }
    /**
     * 通过id查找产品
     * */
    public function searchById($id){

    }
    /**
     * 查找所有产品
     * */
    public function searchAll($num,$offset,$cateid){

    }
}
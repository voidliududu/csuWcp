<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-13
 * Time: 下午1:10
 */

defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('Studio');
        $this->load->library('Uploader');
        //$this->load->model('Intro');
    }
    /**
     * 添加产品（product表部分）
     * @param any $product
     * @return array
     *
     * */
    public function addProduct(){
        $media['STU_ID'] = $this->session->userdata('STU_ID');
        if($media['STU_ID'] == null)
            return ['flag' =>false,'error' => "session expired"];
        $media['NAME'] = $this->input->post('name');
        if($media['NAME'] == null)
            return ['flag' => false,'error' => 'product name required'];
        $media['AUTHOR'] = $this->input->post('author');
        $media['CATE_ID'] = $this->input->post('cate');
        $media['CREATED'] = date('Y-m-d H:i:s');
        $media['MODIFIED'] = $media['CREATED'];
        return ['flag' => true,'media' => $media];
    }
    /**
     * 更新产品
     * */
    public function updateProduct($id){
        $media['STU_ID'] = $this->session->userdata('STU_ID');
        if($media['STU_ID'] == null)
            return ['flag' =>false,'error' => "session expired"];
        $media['NAME'] = $this->input->post('name');
        if($media['NAME'] == null)
            return ['flag' => false,'error' => 'product name required'];
        $media['AUTHOR'] = $this->input->post('author');
        $media['CATE_ID'] = $this->input->post('cate');
        $media['MODIFIED'] = date('Y-m-d H:i:s');
        return ['flag' => true,'media' => $media];
    }
    /**
     * 更新工作室计数
     * @param bool $flag  true to add , false to dec
     * @param session $studio  the studio id
     * @return array
     * **/
    private function refreshStudio($flag){
        $id = $this->session->userdata('studio');
        if($id == null)
            return ['flag' => false,'error' => 'session expired'];
        $result = $this->Studio->searchById($id);
        if($result['flag'] == false)
            return ['flag' => false,'error' => 'cant find studio'];
        $studio = $result['studio'];
        $num = $studio->PRO_NUM;
        if($flag == true)
            $num++;
        else
            $num--;
        $studio->PRO_NUM = $num;
        if($this->db->set('PRO_NUM',$num)->where('STU_ID',$id)->update('STUDIO'))
            return ['flag' => true];
        return ['flag' => false, 'error' => 'update error'];
    }
    /**
     * 删除产品
     * @return array
     * todo 添加一个delete字段
     * */
    public function delProduct($id){
        //$id = $this->session->user_data('pro_id');
        if($id == null)
            return ['flag' => false,'error' => 'pro_id required'];
        $studio = $this->session->userdata('studio');
        if($studio == null)
            return ['flag' => false,'error' => 'session expired'];
        $result = $this->searchById($id);
        if($result['flag'] == false)
            return ['flag' => false,'error' => $result['error']];
        if($result['product']->STU_ID != $studio)
            return ['flag' => false,'error' => 'denied'];
        if($this->db->where('ID',$id)->update('PRODUCT',['DELETED'=>1]))
            return ['flag' => true,'pro_id' => $id];
        return ['flag' => false,'error' => 'database error'];
    }
    /**
     * @param int $id  产品id
     * @param bool $flag  true为通过审核，false为不通过审核
     * */
    public function audit($id,$flag = true){
        if($flag){
            $result = $this->db->where('ID',$id)->update('PRODUCTS',['AUDIT'=>1]);
        }else{
            $result = $this->db->where('ID',$id)->update('PRODUCTS',['AUDIT' => 0]);
        }
        return $result;
    }
    /**
     * 通过id查询产品
     * @return array
     * */
    public function searchById($id){
        $product = $this->db->where('ID', $id)->where('DELETE',0)->get('PRODUCT')->row();
        if($product)
            return ['flag' => true,'product'=>$product];
        return ['flag' => false,'error' => 'no such product'];
    }
    public function list($cate = null){
        if($cate == null){
            $product = $this->db->get('PRODUCT_INFO');
            return $product;
        }else{
            $product = $this->db->where('CATEID',$cate)->get('PRODUCT_INFO');
            return $product;
        }
    }
    /**
     * 通过分类查询产品
     * @return array array
     * */
    public function searchByCate($cateid,$offset = 0,$num = 0){
        $cate_map = [
            '1' => 'WE_MOVIE',
            '2' => 'WE_MUSIC',
            '3' => 'WE_APP',
            '4' => 'WE_MAG',
            '5' => 'WE_CARTOON',
            '6' => 'WE_ACT'
        ];
        $product = $this->db->limit($num,$offset)->get($cate_map[$cateid]);
        return $product;
    }
    /**
     * 通过cate和id搜索具体产品
     * */
    public function searchByCateId($cateid,$id){
        $cate_map = [
            '1' => 'WE_MOVIE',
            '2' => 'WE_MUSIC',
            '3' => 'WE_APP',
            '4' => 'WE_MAG',
            '5' => 'WE_CARTOON',
            '6' => 'WE_ACT'
        ];
        $product = $this->db->where('ID',$id)->get($cate_map[$cateid])->row();
//        if(empty($product))
//            return ['flag' => false,'error' => 'empty'];
//        return ['flag' => false,'product' => $product];
        return $product;
    }
    /**
     * 通过工作室查询
     * */
    public function searchByStudio($stuid,$offset = 0,$num = 0){
        $product = $this->db->where('DELETE',0)->where('STUDIO',$stuid)->limit($offset,$num)->get('PRO_INFO');
        if(empty($product))
            return ['flag' => false,'error' => 'empty'];
        return $product;
    }

}




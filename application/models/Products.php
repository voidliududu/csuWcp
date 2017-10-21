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
        $this->load->model('Intro');
    }
    /**
     * 添加产品（product表部分）
     * @param any $product
     * @return array
     *
     * */
    public function addProduct($product = null){
        $counter = $this->session->userdata('studio');
        if($counter == null)
            return ['flag' => false,'error' => 'session expired'];
        $product['STUDIO'] = $counter;
        $counter = $this->input->post('name');
        if($counter == null)
            return ['flag' => false,'error' => 'name required'];
        $product['PRO_NAME'] = $counter;
        $counter = $this->input->post('intro');
        if($counter == null)
            return ['flag' => false,'error' => 'intro required'];
            //$product['PRO_INTRO'] = $counter;
        $intro = $counter;
        $counter = $this->input->post('cate');
        if($counter != null)
            $product['CATE'] = $counter;
        $product['CREATED'] = date('Y-m-d H:i:s');
        $this->db->trans_start();
        //TODO 更改author
        $result = $this->Intro->add(['AUTHOR' => 'AUTHOR','CONTENT' => $intro]);
        if($result['flag'] == false)
            return ['flag' => false,'error' => $result['error']];
        $product['PRO_INTRO'] = $result['id'];
        $this->refreshStudio(true);
        $flag = $this->db->insert('PRODUCT',$product);
        $this->db->trans_complete();
        if($flag)
            return ['flag' => true];
        return ['flag' => false,'error' => 'insert error'];
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
    public function delProduct(){
        $id = $this->session->user_data('pro_id');
        if($id == null)
            return ['flag' => false,'error' => 'pro_id required'];
        $studio = $this->session->userdata('studio');
        if($studio == null)
            return ['flag' => false,'error' => 'session expired'];
        $result = $this->searchById($id);
        if($result['flag'] == false)
            return ['flag' => false,'error' => $result['error']];
        if($result['product']->STUDIO != $studio)
            return ['flag' => false,'error' => 'denied'];
        if($this->db->where('',$id)->update('PRODUCT',['DELETE'=>1]))
            return ['flag' => true,'pro_id' => $id];
        return ['flag' => false,'error' => 'database error'];
    }

    /**
     * 通过id查询产品
     * @return array
     * */
    public function searchById($id){
        $product = $this->db->where('', $id)->where('DELETE',0)->get('PRODUCT')->row();
        if($product)
            return ['flag' => true,'product'=>$product];
        return ['flag' => false,'error' => 'no such product'];
    }
    /**
     * 通过分类查询产品
     * @return array array
     * */
    public function searchByCate($cateid,$offset = 0,$num = 0){
        $product = $this->db->where('DELETE',0)->where('CATE',$cateid)->limit($offset,$num)->get('PRO_INFO');
        if(empty($product))
            return ['flag' => false,'error' => 'empty'];
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
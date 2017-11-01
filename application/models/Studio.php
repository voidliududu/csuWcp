<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-9-26
 * Time: 上午10:39
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Studio extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("Users");
        //$this->load->libray('session');
    }
    //添加工作室

    /**
     * @param $studio array [$name,$departmanet] post(file img,text intro)
     * @return array
     */
    public function addStudio(){
        $studio['NAME'] = $this->input->post('name');
        $studio['DEPART'] = $this->input->post('department');
        if(!$studio['NAME'])
            return ['flag' => false,'error' => "缺少用户名"];
        //先存入介绍信息
        $this->db->trans_begin();
        $studio['INTRO'] = $this->input->post("intro");
        $studio['CREATED'] = date('Y-m-d H:i:s');
        $studio['MODIFIED'] = $studio['CREATED'];
        $studio['STATE'] = 1;
        $studio['PRO_NUM'] = 0;
        //插入图片
        $this->load->library('Uploader');
        $result = $this->uploader->getPic($_FILES);
        if($result['flag'] == false) {
            $this->db->trans_complete();
            return ['flag' => false, 'error' => "上传图片失败"];
        }
        $studio['LOGO'] = $result['fileList'][0]['RES_ADDR'];
        $this->db->insert('STUDIO',$studio);
        //创建账户
        $stu_id = $this->db->insert_id();
        $account = $studio['NAME'];
        $password = "zntwwcp";
        $password = $this->fount_hash($password);
        $test = $this->Users->signUp($account,$password,$stu_id);
        if($test['flag'] == false) {
            $this->db->trans_rollback();
            return ['flag' =>false,'error' => "账户创建失败"];
        }
        else {
            $this->db->trans_commit();
            return ['flag' => true];
        }
    }
    //删除工作室
    public function dropStudio($stu_id){
        $this->db->trans_start();
        $this->Users->delete($stu_id);
        $this->db->where('ID',$stu_id)->update('STUDIO',['STATE' => 0]);
        $this->db->where('REF',$stu_id)->delete('RESOURCE');
        $this->db->trans_complete();
    }
    //更改工作室信息
    public function update($studio){
        $id = $this->input->post('id');
        if($id == null) return ['flag' => false,'error' => 'id required'];
        $counter = $this->input->post('name');
        if($counter != null)
            $studio['NAME'] = $counter;
        $counter = $this->input->post('department');
        if($counter != null)
            $studio['DEPART'] = $counter;
        if($this->db->where('ID',$id)->update('STUDIO',$studio))
            return ['flag' => true];
        return ['flag' => false,'error' => 'database error'];
    }

    //查询工作室信息
    public function searchAll($num = 0,$offset = 0){
        $studios = $this->db->limit($num,$offset)->get('STUDIO');
        if(!$studios)
            return ['flag' => false];
        return ['flag' =>true,'studios' => $studios];
    }
    public function searchById($id){
        $studio = $this->db->where('ID',$id)->get('STUDIO')->row();
        if(!$studio)
            return ['flag' => false];
        return ['flag' =>true,'studio' => $studio];
    }

    /*
     * 模拟前端对密码的处理
     * */
    private function fount_hash($password){
        return $password;
    }

//    /*
//     * 文件上传  上传文件，将url存入数据库，返回id
//     * */
//    private function upload_img($field_name,$stu_id){
//        $config['upload_path']      = '/srv/http/codeIgniter/asset/upload/';
//        $config['allowed_types']    = 'gif|jpg|png';
//        $config['max_size']         = 2048;
//        $config['max_width']        = 1024;
//        $config['max_height']       = 768;
//        $config['file_name']        = time();
//        $this->load->library('upload',$config);
//
//        if(!$this->upload->do_upload($field_name)){
//            return array('flag' => false,'error' => $this->upload->display_errors());
//        }else{
//            $resource['LINK'] = base_url('asset/upload/').$this->upload->data('file_name');
//            $resource['TYPE'] = base_url('asset/upload/').$this->upload->data('file_type');
//            $resource['REF'] = $stu_id;
//            $resource['CREATED'] = date('Y-m-d H:i:s');
//            $this->db->insert('RESOURCE',$resource);
//            return array(['flag' => true,'id' =>$this->db->insert_id()]);
//        }
//    }

    public function test(){
        $studio['STU_NAME'] = $this->input->post('name');
        $studio['STU_DEPARTMENT'] = $this->input->post('department');
        //先存入介绍信息
        $this->db->trans_start();
        $intro['content'] = $this->input->post("intro");
        $this->db->insert('INTRO',$intro);
        $msgid = $this->db->insert_id();
        $studio['STU_INTRO'] = $msgid;
        echo $msgid;
    }
}
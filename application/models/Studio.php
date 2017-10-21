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
        $studio['STU_NAME'] = $this->input->post('name');
        $studio['STU_DEPARTMENT'] = $this->input->post('department');
        if(!$studio['STU_NAME'])
            return ['flag' => false,'error' => "缺少用户名"];
        //先存入介绍信息
        $this->db->trans_start();
        $intro['content'] = $this->input->post("intro");
        $this->db->insert('INTRO',$intro);
        $msgid = $this->db->insert_id();
        $studio['STU_INTRO'] = $msgid;
        //创建工作室
        $studio['PRO_NUM'] = 0;
        $studio['CREATED'] = date('Y-m-d H:i:s');
        $this->db->insert('STUDIO',$studio);
        $stu_id = $this->db->insert_id();
        //插入图片
        $flag = $this->upload_img('logo',$stu_id);
        //创建账户
        $account = $studio['STU_NAME'];
        $password = "zntwwcp";
        $password = $this->fount_hash($password);
        $this->Users->signUp($account,$password,$stu_id);
        $this->db->trans_complete();
        return $flag;
    }
    //删除工作室
    public function dropStudio($stu_id){
        $this->db->trans_start();
        $this->Users->delete($stu_id);
        $this->db->where('STU_ID',$stu_id)->delete('STUDIO');
        $this->db->where('REF',$stu_id)->delete('RESOURCE');
        $this->db->trans_complete();
    }
    //更改工作室信息
    public function update($studio){
        $id = $this->output->post('id');
        if($id == null) return ['flag' => false,'error' => 'id required'];
        $counter = $this->output->post('name');
        if($counter != null)
            $studio['STU_NAME'] = $counter;
        $counter = $this->output->post('department');
        if($counter != null)
            $studio['STU_DEPARTMENT'] = $counter;
        if($this->db->where('STU_ID',$id)->update('STUDIO',$studio))
            return ['flag' => true];
        return ['flag' => false,'error' => 'database error'];
    }

    //查询工作室信息
    public function searchAll(){
        $studios = $this->db->get('STUDIO');
        if(!$studios)
            return ['flag' => false];
        return ['flag' =>true,'studios' => $studios];
    }

    public function searchById($id){
        $studio = $this->db->where('STU_ID',$id)->get('STU_INFO')->row();
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
    /*
     * 文件上传  上传文件，将url存入数据库，返回id
     * */
    private function upload_img($field_name,$stu_id){
        $config['upload_path']      = '/srv/http/codeIgniter/asset/upload/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 2048;
        $config['max_width']        = 1024;
        $config['max_height']       = 768;
        $config['file_name']        = time();

        $this->load->library('upload',$config);

        if(!$this->upload->do_upload($field_name)){
            return array('flag' => false,'error' => $this->upload->display_errors());
        }else{
            $resource['LINK'] = base_url('asset/upload/').$this->upload->data('file_name');
            $resource['TYPE'] = base_url('asset/upload/').$this->upload->data('file_type');
            $resource['REF'] = $stu_id;
            $resource['CREATED'] = date('Y-m-d H:i:s');
            $this->db->insert('RESOURCE',$resource);
            return array(['flag' => true,'id' =>$this->db->insert_id()]);
        }
    }

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
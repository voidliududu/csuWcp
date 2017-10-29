<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-9-21
 * Time: 下午5:45
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model
{
    //初始化users
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //登录的检查
    /* @param $account,password 用户名，密码
     *
     * @return array 用户名不存在或用户名，密码不匹配
     *         true 验证成功
     * */
    public function signIn($account ,$password){
        $passwordHashValue = $this->get_password_hash($password);
        $sql = "SELECT * FROM USERS WHERE ACCOUNT = ?";
        $query = $this->db->query($sql,$account);
        $result = $query->row();
        if(empty($result))
            return ['flag' => false,'error' => "用户名不存在"];
        if(password_verify($passwordHashValue,$result->PASSWORD))
            return ['flag' => true,'user' => $result];
        else
            return ['flag' => false,'error' => "用户名，密码不匹配"];
    }
    //添加账户
    public function signUp($account,$password,$studio){
        $password = $this->get_password_hash($password);
        $password = password_hash($password,1);
        $user = [
            'ACCOUNT' => $account,
            'PASSWORD' => $password,
            'PRIVILEGE' => 1,
            'CREATED' =>date('Y-m-d H:i:s'),
            'STU_ID' => $studio
        ];
        if(!empty($this->db->where('ACCOUNT',$account)->select('ACCOUNT')->get('USERS')->row()))
            return ['error' => '用户名已存在','flag' => false];
        if($this->db->insert('USERS',$user))
            return ['flag' => true];
        return ['flag' => false,'error' => '未知错误'];
    }

    /*
     * 更改账户
     * */
    public function change($user){
        if($this->db->replace('USERS',$user))
            return true;
        return false;
    }
    //删除账户
    public function delete($stu_id){
        if($this->db->where('STU_ID',$stu_id)->delete('USERS'))
            return true;
        return false;
    }

    /*
     * 获取密码的hash
     * */
    private function get_password_hash($password){
        return $password;
    }
}
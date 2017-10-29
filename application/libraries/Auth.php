<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-10
 * Time: 上午12:20
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Auth
{
    protected $CI;
    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->library('session');
    }
    /**
     * 登录认证成功后记录登录状态
     * @param $user object 应包含UID， ACCOUNT，STU_ID,PRIVILEGE字段
     * */
    public function login($user)
    {
        $this->CI->session->set_userdata([
            'userid' => $user->UID,
            'username' => $user->ACCOUNT,
            'studio' => $user->STU_ID,
            'privilege' => $user->PRIVILEGE
        ]);
    }
    /**
     * 检查是否登录
     * @return bool 登录返回true否则返回false
     * */
    public function isLogin()
    {
        $userData = $this->CI->session->userdata();
        if(@$userData['userid'] and $userData['studio'] and ($userData['privilege']))
            return true;
        return false;
    }
    /**
     * 检查是否是管理员
     * @return bool 是则返回true否则返回false
     * */
    public function isAdmin()
    {
        $userData = $this->CI->session->userdata();
        if(@$userData['userid'] and $userData['studio'] and ($userData['privilege'] == 5))
            return true;
        return false;
    }
    /**
     * 登出
     * @param $callback closure 登出的回调函数
     * */
    public function logout($callback){
        $this->CI->session->unset_userdata(['userid','username','privilege']);
        if($callback)
            $callback();
    }
}
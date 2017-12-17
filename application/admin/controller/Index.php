<?php
/**
 * login相关
 * */
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Session;
use app\admin\model\User;
use Auth;
class Index extends Controller
{
    /**
     * 登录
     * */
    public function login(){
        $req = Request::instance();
        if($req->has("username",'post') && $req->has("password",'post')){
            $user = User::get(['account' => $req->post("username")]);
            if($user != null){
                //$passHash = password_hash($req->post("password"),PASSWORD_BCRYPT);
                if(password_verify($req->post("password"),$user->password)){
                    Auth::login($user);
                    return json([
                       'err' => 0,
                       'msg' => "success",
                        'token' => $user->id,
                        'info' => Auth::getUserInfo(),
                        'logout' => Auth::userLogout()
                    ]);
                }else{
                    return json([
                        'err' => 1,
                        'msg' => "用户名密码不匹配"
                    ]);
                }
            }else{
                return json([
                    'err' => 2,
                    'msg' => "用户名不存在"
                ]);
            }
        }else{
            return json([
                'err' => 3,
                'msg' => "用户名或密码不能为空"
            ]);
        }
    }
    /**
     * 登出
     * */
    public function logout(){
        Auth::logout();
        return json([
            'err' => 0,
            'msg' => 'success'
        ]);
    }
    /**
     * 获取用户详细信息
     * */
    public function role(){
        if(($id = Session::get('userId')) != null){
            $user = User::get($id);
            if($user != null){
                return json([
                    'err' => 0,
                    'msg' => 'success',
                    'privilege' => Auth::getAllPrivilege()
                ]);
            }else{
                return json([
                    'err' => 1,
                    'msg' => '用户不存在'
                ]);
            }
        }else{
            return json([
               'err' => 2,
                'msg' => '无登录凭证'
            ]);
        }
    }
}

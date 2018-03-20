<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-11-18
 * Time: 下午11:13
 */
//未上传？
use \think\Session;
use think\Url;
class Auth
{
    //访客权限
    static $GUEST = 0;
    //普通用户权限
    static $USER = 2;
    //超级管理员权限
    static $ADMIN = 0;
    //接口定义
    static $api = [
        //用户登录
        'userLogin' => 'admin/Index/login',
        //用户登出
        'userLogout' => 'admin/Index/logout',
        //获取用户信息
        'getUserInfo' => 'admin/Index/role',
        //获取用户所有权限的接口
        'getUserAllPrivilege' => '',

        //获取所有分类信息的接口
        'getAllCateInfo' =>'admin/Cate/showList',
        //通过id获取一个分类的详细信息
        'getOneCateInfoById' =>'admin/Cate/getOneCateInfo',
        //更改分类
        'updateCate' => 'admin/Cate/modifyOneCate',
        //删除分类的接口
        'deleteCate' => 'admin/Cate/deleteCate',
        //添加分类
        'addCate' => 'admin/Cate/addCate',

        //获取所有工作室
        'getAllStudio' => 'admin/Stud/getAllStudio',
        //根据id获取工作室信息
        'getStudioById' => 'admin/Stud/getStudioById',
        //更改工作室
        'updateStudio' => 'admin/Stud/modifyStudio',
        //删除工作室
        'deleteStudio' => 'admin/Stud/deleteStudio',

        //通过cate,offset ,num 获取产品
        'getProducts' => 'admin/Product/getProducts',
        //通过id 获取产品
        'getProductById' => 'admin/Product/getProductById',
        //通过cate查询产品
        'getProductByStudio' => 'admin/Product/getProductByStudio',
        //更改产品
        'modifyProduct' => 'admin/Product/modifyProduct',
        //删除产品
        'deleteProduct' => 'admin/Product/deleteProduct',
        //添加产品
        'addProduct' => 'admin/Product/addProduct',

        //上传视频
        'uploadResource' => 'admin/Resource/addResource',
        //上传视频的表单
        'addVideoForm' => 'admin/Resource/addVideoForm',
        //上传图片的表单
        'addImageForm' => 'admin/Resource/addVideoForm',
        //上传其他资源的表单
        'addOtherForm' => 'admin/Resource/addVideoForm',
        //查询资源
        'getResource' => 'admin/Resource/getResource',
        //删除资源
        'deleteResource' => 'admin/Resource/deleteResource',

        //获取页面信息
        'getPages' => 'admin/Page/getPages',
        //添加页面
        'addPages' => 'admin/Page/save',
        //显示界面
        'showPage' => 'admin/Page/read',
        //更新页面
        'updatePage' => 'admin/Page/update',
        //删除页面
        'deletePage' => 'admin/Page/delete'
    ];
    //登录，记录session
    static function login($user){
        Session::set('userId',$user->id);
        Session::set('privilege',$user->role);
    }
    //登出，删除session
    static function logout()
    {
        Session::destroy();
    }
    //检查权限
    static function checkPrivilege($priFlag)
    {
        if($priFlag == self::$GUEST)
            return true;
        return Session::get("privilege") >= $priFlag;
    }
    //获取用户信息的接口
    static function getUserInfo()
    {
        return Url::build(self::$api['getUserInfo']);
    }
    //获取用户登出的接口
    static function userLogout()
    {
        return Url::build(self::$api['userLogout']);
    }
    //获取用户的所有权限
    static function getAllPrivilege()
    {
        return [];
    }

    //查询所有分类的信息
    static function getAllCateInfo()
    {
        return Url::build(self::$api['getAllCateInfo']);
    }
    //通过id获取分类信息的接口
    static function getOneCateById($id)
    {
        return Url::build(self::$api['getOneCateInfoById'],['id' => $id]);
    }
    //更改分类的接口
    static function modifyOneCate($id)
    {
        if (self::checkPrivilege(self::$ADMIN))
            return Url::build(self::$api['updateCate'],['id' => $id]);
        return '';
    }
    //删除分类的接口
    static function deleteCate($id)
    {
        if (self::checkPrivilege(self::$ADMIN))
            return Url::build(self::$api['deleteCate'],['id' => $id]);
        return '';
    }

    //通过id获取工作室信息的接口
    static function getStudioById($id)
    {
        if (self::checkPrivilege(self::$ADMIN))
            return Url::build(self::$api['getStudioById'],['id' => $id]);
        return '';
    }
    //获取所有工作室信息
    static function getAllStudio($offset,$number){
        return Url::build(self::$api['getAllStudio'],['offset'=> $offset,'number' => $number]);
    }
    //更改工作室
    static function modifyStudio($id)
    {
        if (self::checkPrivilege(self::$ADMIN))
            return Url::build(self::$api['updateStudio'],['id' => $id]);
        return '';
    }
    //删除工作室
    static function deleteStudio($id)
    {
        if (self::checkPrivilege(self::$ADMIN))
            return Url::build(self::$api['deleteStudio'],['id' => $id]);
        return '';
    }

    //添加产品
    static function addProduct()
    {
        if (self::checkPrivilege(self::$ADMIN))
            return Url::build(self::$api['addProduct']);
        return '';
    }
    //删除产品
    static function deleteProduct($id)
    {
        if (self::checkPrivilege(self::$ADMIN))
            return Url::build(self::$api['deleteProduct'],['id' => $id]);
        return '';
    }
    //修改产品
    static function modifyProduct($id)
    {
        if (self::checkPrivilege(self::$ADMIN))
            return Url::build(self::$api['modifyProduct'],['id' => $id]);
        return '';
    }
    //通过id查询产品
    static function getProductById($id)
    {
        return Url::build(self::$api['getProductById'],['id' => $id]);
    }
    //通过cate offset num查询产品
    static function getProducts($cate, $offset,$num)
    {
        return Url::build(self::$api['getProducts'],['cate' => $cate, 'offset' => $offset,'num' => $num]);
    }
    //通过工作室查询产品
    public function getProductByStudio($stuid)
    {
        return Url::build(self::$api['getProductByStudio']);
    }

    //上传视频
    public function uploadVideo()
    {
        return Url::build(self::$api['uploadVideo']);
    }
}
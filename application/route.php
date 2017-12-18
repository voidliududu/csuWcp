<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],
//
//];
use think\Route;
use \Auth;

//test begin
Route::get('test/install/studio','admin/Stud/index');
Route::get('test/install/product','admin/product/index');
//test end



//登录
Route::post('admin/login',Auth::$api['userLogin']);
//登出
Route::get('admin/logout',Auth::$api['userLogout']);
//获取用户信息
Route::get('admin/role',Auth::$api['getUserInfo']);

//获取所有分类
Route::get('common/allCateInfo',Auth::$api['getAllCateInfo']);
//通过id查询分类
Route::get('admin/cate/info/:id',Auth::$api['getOneCateInfoById']);
//删除分类
Route::get('admin/cate/delete/:id',Auth::$api['deleteCate']);
//更改分类
Route::post('admin/cate/modify/:id',Auth::$api['updateCate']);

//通过id获取工作室信息  (ok)
Route::get('admin/studio/info/:id',Auth::$api['getStudioById']);
//获取所有工作室信息   (ok) 0为偏移量的第一个
Route::get('admin/studio/all/[:offset]/[:number]',Auth::$api['getAllStudio']);
//删除工作室
Route::get('admin/studio/delete/:id',Auth::$api['deleteStudio']);
//添加工作室
Route::post('admin/studio/add',Auth::$api['addProduct']);
//更改工作室        (ok)
Route::post('admin/studio/modify/:id',Auth::$api['updateStudio']);

//通过id获取产品信息              (ok)
Route::get('common/product/info/:id',Auth::$api['getProductById']);
//通过id删除产品                 (ok)
Route::get('admin/product/delete/:id',Auth::$api['deleteProduct']);
//通过offset，number ，cate获取产品    (ok)
Route::get('common/product/all/:cate/:offset/:num',Auth::$api['getProducts']);


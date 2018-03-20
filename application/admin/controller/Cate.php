<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Category;
use Auth;

class Cate extends Controller
{
    //获取所有的分类详细信息
    public function showlist(){
        //Category::install();
        $cates = Category::all(['isdelete' => 0]);
        if($cates != null) {
            return json([
                'err' => 0,
                'msg' => '成功',
                'data' => $cates
            ]);
        }else{
            return json([
                'err' => 1,
                'msg' => '失败'
            ]);
        }
    }
    //通过id查询分类的信息
    public function getOneCateInfo($id){
        $cate =Category::get($id);
        if($cate != null){
            return json([
                'err' => 0,
                'msg' => '成功',
                'data' => $cate,
                'next' => Auth::getOneCateById($id),
                'modify' => Auth::modifyOneCate($id),
                'delete' => Auth::deleteCate($id)
            ]);
        }else{
            return json([
                'err' => 2,
                'msg' => '查询失败',
            ]);
        }
    }

    //更改分类
    public function addCate(){
        if(!Auth::checkPrivilege(Auth::$ADMIN))
            return json([
                'err' => 5,
                'msg' => '权限不足'
            ]);
        $cate = new Category();
        $request = Request::instance();
        if($request->has('catename','post'))
            $cate->catename = $request->post('catename');
        else
            return json([
                'err' => 1,
                'msg' => "需要分类名"
            ]);
        if($request->has('description','post'))
            $cate->description = $request->post('description');
        else
            return json([
                'err' => 2,
                'msg' => '需要描述信息'
            ]);
        if($request->has('catelogo','post'))
            $cate->catelogo = $request->post('catelogo');
        else
            return json([
                'err' => 3,
                'msg' => '需要logo链接'
            ]);
        $cate->update_at = date('Y-m-d H;i:s');
        $cate->create_at = $cate->update_at;
        if($cate->save())
            return json([
                'err' => 0,
                'msg' => '成功',
                'cateid' => $cate->id
            ]);
        else
            return json([
                'err' => 4,
                'msg' => '数据库错误'
            ]);
    }

    //更改分类
    public function modifyOneCate($id){
        if(!Auth::checkPrivilege(Auth::$ADMIN))
            return json([
                'err' => 5,
                'msg' => '权限不足'
            ]);
        $cate = Category::get($id);
        if($cate != null){
            $request = Request::instance();
            if($request->has('catename','post'))
                $cate->catename = $request->post('catename');
            if($request->has('description','post'))
                $cate->description = $request->post('description');
            if($request->has('catelogo','post'))
                $cate->catelogo = $request->post('catelogo');
            $cate->save();
            return json([
                'err' => 0,
                'msg' => '成功'
            ]);
        }else{
            return json([
                'err' => 2,
                'msg' => '更改失败',
            ]);
        }
    }
    //删除分类
    public function deleteCate($id){
        if(!Auth::checkPrivilege(Auth::$ADMIN))
            return json([
               'err' => 1,
               'msg' => '权限不足'
            ]);
        $cate = Category::get($id);
        if($cate != null){
            $cate->isdelete = 1;
            $cate->save();
            return json([
                'err' => 0,
                'msg' => '成功'
            ]);
        }else{
            return json([
                'err' => 2,
                'msg' => '失败'
            ]);
        }
    }
}

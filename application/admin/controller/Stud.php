<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;
use app\admin\model\Studio;
use \Auth;

class Stud extends Controller
{
    public function index()
    {
        //
        Studio::install();
        return json([
            'err' => 0,
            'msg' => 'success'
        ]);
    }
    //通过id获取工作室信息
    public function getStudioById($id){
        if($id == null)
            return json(
                [
                    'err' => 1,
                    'msg' => '缺少id'
                ]
            );
        $result = Studio::get($id);
        if($result != null){
            return json([
                'err' => 0,
                'msg' => "成功",
                'data' => $result,
                'modify' => Auth::modifyStudio($id),
                'delete' => Auth::deleteStudio($id),
                'next' => Auth::getStudioById($id+1),
            ]);
        }else{
            return json([
                'err' => 2,
                'msg' => "该工作室不存在"
            ]);
        }
    }
    //通过offset，num 获取工作室信息
    public function getAllStudio($offset = 0,$number = 0){
        if($offset == 0 && $number == 0)
            $studios = Db::table('studio')->select();
        else
            $studios = Db::table('studio')->limit($offset,$number)->select();
        if($studios == null)
            return json([
                'err' => 1,
                'msg' => "无数据"
            ]);
        return json([
            'err' => 0,
            'msg' => "成功",
            'data' => $studios,
            'next' => Auth::getAllStudio($offset + $number, $number)
        ]);
    }
    //更改工作室
    public function modifyStudio($id){
        if(!\Auth::checkPrivilege(\Auth::$ADMIN))
            return json([
                'err' => 3,
                'msg' => '权限不足'
            ]);
        $req = Request::instance();
        $stu = Studio::get($id);
        if($stu == null)
            return json([
                'err' => 1,
                'msg' => '该工作室不存在'
            ]);
        if($req->has('studio_name','post'))
            $stu->studio_name = $req->post('studio_name');
        if($req->has('logo','post'))
            $stu->logo = $req->post('logo');
        if($req->has('department','post'))
            $stu->department = $req->post('department');
        if($req->has('description','post'))
            $stu->description = $req->post('description');
        if($req->has('info_page','post'))
            $stu->info_page = $req->post('info_page');
        $stu->update_at = date('Y-m-d H:i:s');
        if($stu->save())
            return json([
                'err' => 0,
                'msg' => '成功'
            ]);
        return json([
            'err' => 2,
            'msg' => '修改失败'
        ]);
    }
    //删除工作室
    public function deleteStudio($id){
        if(!\Auth::checkPrivilege(\Auth::$ADMIN))
            return json([
                'err' => 1,
                'msg' => '权限不足'
            ]);
        $stu = Studio::get($id);
        if($stu == null)
            return json([
                'err' => 2,
                'msg' => '该工作室不存在'
            ]);
        $stu->isdelete = 1;
        if($stu->save())
            return json([
                'err' => 0,
                'msg' => '成功'
            ]);
        return json([
            'err' => 3,
            'msg' => '删除失败'
        ]);
    }
    //添加工作室
    public function addStudio(){
        if(!\Auth::checkPrivilege(\Auth::$ADMIN))
            return json([
                'err' => 1,
                'msg' => '权限不足'
            ]);
        $stu = new Studio;
        $req = Request::instance();
        if(!$req->has('studio_name'))
            return json([
                'err' => 2,
                'msg' => '缺少工作室名'
            ]);
        $stu->studio_name = $req->post('studio_name');
        if($req->has('department','post'))
            $stu->department = $req->post('department');
        if($req->has('logo','post'))
            $stu->logo = $req->post('logo');
        if($req->has('description', 'post'))
            $stu->description = $req->post('description');
        if($req->has('info_page', 'post'))
            $stu->info_page = $req->post('info_page');
        if($stu->save())
            return json([
               'err' => 0,
               'msg' => "成功"
            ]);
        return json([
            'err' => 3,
            'msg' => '添加失败'
        ]);
    }
}

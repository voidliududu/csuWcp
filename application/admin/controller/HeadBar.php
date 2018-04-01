<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

use app\admin\model\HeadBars;
use Auth;

class HeadBar extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        $hb = new HeadBars();
        $hbs = $hb->where('isdelete', 0)->order('privilege','desc')->select();
        if($hbs != null) {
            return json([
                'err' => 0,
                'msg' => '成功',
                'data' => $hbs
            ]);
        }else{
            return json([
                'err' => 1,
                'msg' => '失败'
            ]);
        }
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
        if (!Auth::checkPrivilege(Auth::$ADMIN))
            return json([
                'err' => 1,
                'msg' => '权限不足'
            ]);
        $hb = new HeadBars();
        if ($request->has('barname','post'))
            $hb->bar_name = $request->post('barname');
        else
            return json([
                'err' => 2,
                'msg' => '需要headbar名'
            ]);
        if ($request->has('link','post'))
            $hb->link = $request->post('link');
        else
            return json([
                'err' => 3,
                'msg' => '需要图片链接'
            ]);
        if ($request->has('privilege','post')) {
            $temp_pri = $request->post('privilege');
            if ($temp_pri < 0 or $temp_pri > 10) {
                return json([
                    'err' => 4,
                    'msg' => '优先级不合法'
                ]);
            }
            $hb->privilege = $temp_pri;
        }else{
            return json([
                'err' => 5,
                'msg' => '需要优先级'
            ]);
        }
        $hb->create_at = date('Y-m-d H:i:s');
        $hb->update_at = $hb->create_at;
		try{
        	$hb->save();
		}catch(\Exception $e) {
		    return json([
                'err' => 6,
                'msg' => '数据库错误'
            ]);

		}
		return json([
               'err' => 0,
               'msg' => '成功'
	   	]);


    }


    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
        $hb = HeadBars::get($id);
        if ($hb != null)
            return json([
               'err' => 0,
               'msg' => '成功',
               'data'=> $hb
            ]);
        else
            return json([
                'err' => 1,
                'msg' => '指定资源不存在'
            ]);
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {

    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
        if(!Auth::checkPrivilege(Auth::$ADMIN))
            return json([
                'err' => 1,
                'msg' => '权限不足'
            ]);
        $hb = HeadBars::get($id);
        if ($hb == null)
            return json([
                'err' => 2,
                'msg' => '指定资源不存在'
            ]);
        if ($request->has('barname','post'))
            $hb->bar_name = $request->post('barname');
        if ($request->has('link','post'))
            $hb->link = $request->post('link');
        if ($request->has('privilege','post')) {
            $temp_pri = $request->post('privilege');
            if ($temp_pri < 0 or $temp_pri > 10)
                return json([
                    'err' => 3,
                    'msg' => '优先级不合法'
                ]);
            $hb->privilege = $temp_pri;
        }
        $hb->update_at = date('Y-m-d H:i:s');
        try{
        	$hb->save();
		}catch(\Exception $e) {
		    return json([
                'err' => 6,
                'msg' => '数据库错误'
            ]);

		}
		return json([
               'err' => 0,
               'msg' => '成功'
	   	]);

    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
        if (!Auth::checkPrivilege(Auth::$ADMIN))
            return json([
                'err' => 1,
                'msg' => '权限不足'
            ]);
        $hb = HeadBars::get($id);
        if ($hb == null) {
            return json([
               'err' => 2,
               'msg' => '指定资源不存在'
            ]);
        }
        $hb->isdelete = 1;
		try{
        $hb->save();
        return json([
               'err' => 0,
               'msg' => '成功'
	   	]);
		}catch(\PDOException $e) {
		    return json([
                'err' => 3,
                'msg' => '数据库错误'
            ]);

		}
    }
}

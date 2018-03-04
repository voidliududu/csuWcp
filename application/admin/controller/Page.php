<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Pages;
use \Auth;

class Page extends Controller
{
    //通过offset, num查询页面信息
    public function getPages($offset, $num)
    {
        $page = new Pages();
            $result = $page->where('isdelete' , 0)->limit($offset,$num)->order('update_at','desc')->select();
        if (empty($result)) {
            return json([
                'err' => 1,
                'msg' => '页面不存在',
            ]);
        }
        return json([
            'err' => 0,
            'msg' => '成功',
            'data' => $result,
        ]);
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        if (!Auth::checkPrivilege(Auth::$ADMIN))
            return json([
                'err' => 1,
                'msg' => '权限不足'
            ]);
        $info = [];
        if($request->has('name'))
            $info['aname'] = $request->post('name');
        else
            return json([
                'err' => 2,
                'msg' =>'需要页面名'
            ]);
        if ($request->has('template'))
            $info['temp_id'] = $request->post('template');
        else
            return json([
               'err' => 3,
               'msg' => '无模板'
            ]);
        $data = $request->except(['name','template']);
        $info['data_info'] = json_encode($data);
        $info['create_at'] = date('Y-m-d h:i:s');
        $info['update_at'] = $info['create_at'];
        $page = new Pages();
        if($page->save($info))
            return json([
                'err' => 0,
                'msg' => '成功'
            ]);
        return json([
            'err' => 4,
            'msg' => '数据库错误'
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
        $page = Pages::get($id);
        if ($page == null)
            return json([
                'err' => 1,
                'msg' => '页面不存在'
            ]);
        return json([
            'err' => 0,
            'msg' => '成功',
            'info' => $page
        ]);
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
        if(!Auth::checkPrivilege(Auth::$ADMIN))
            return json([
                'err' => 1,
                'msg' => '权限不足'
            ]);
        $page = Pages::get($id);
        if ($page == null)
            return json([
                'err' => 2,
                'msg' => '指定页面不存在'
            ]);
        if ($request->has('name'))
            $page->aname = $request->post('name');
        if ($request->has('template'))
            $page->temp_id = $request->post('template');
        if ($data = $request->except(['name','template']))
            $page->data_info = json_encode($data);
        if ($page->save())
            return json([
                'err' => 0,
                'msg' => '成功'
            ]);
        return json([
           'err' => 3,
           'msg' => '数据库错误'
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
        if (Auth::checkPrivilege(Auth::$ADMIN))
            return json([
                'err' => 1,
                'msg' => '权限不足'
            ]);
        if ($page = Pages::get($id))
            if ($page->delete())
                return json([
                    'err' => 0,
                    'msg' => '成功'
                ]);
            else
                return json([
                    'err' => 2,
                    'msg' => '数据库错误'
                ]);
        return json([
            'err' => 3,
            'msg' => '指定页面不存在'
        ]);
    }
}

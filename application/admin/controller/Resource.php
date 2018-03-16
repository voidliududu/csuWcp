<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Resources;
use Auth;

class Resource extends Controller
{
    //insert some data on the resource table
    public function index()
    {
        Resources::install();
    }

    //form for vedio
    public function addVedioForm()
    {
        return json([
            'err' => 0,
            'msg' => 'success',
            'forms' => [
                [
                    'formLabel' => '资源名称',
                    'formType' => 'input',
                    'formFlag' => 'need',
                    'formName'=> 'rname',
                    'formDescription' => '资源的名称，名称任意'
                ],
                [
                    'formLabel' => '资源文件',
                    'formType' => 'file',
                    'formFlag' => 'need',
                    'formName'=> 'videoFile',
                    'formDescription' => '音乐或视频文件，mp3,mp4格式'
                ],
                [
                    'formLabel' => '资源描述',
                    'formType' => 'text',
                    'formFlag' => 'need',
                    'formName'=> 'description',
                    'formDescription' => '资源的描述'
                ],
            ],
            'submit' => ''
        ]);
    }
    //form for image
    public function addImageForm()
    {
        return json([
            'err' => 0,
            'msg' => 'success',
            'forms' => [
                [
                    'formLabel' => '图片名称',
                    'formType' => 'input',
                    'formFlag' => 'need',
                    'formName'=> 'rname',
                    'formDescription' => '资源的名称，名称任意'
                ],
                [
                    'formLabel' => '图片文件',
                    'formType' => 'file',
                    'formFlag' => 'need',
                    'formName'=> 'videoFile',
                    'formDescription' => '图片文件，png，jpeg格式'
                ],
                [
                    'formLabel' => '图片描述',
                    'formType' => 'text',
                    'formFlag' => 'need',
                    'formName'=> 'description',
                    'formDescription' => '资源的描述'
                ],
            ],
            'submit' => ''
        ]);
    }
    //form for image
    public function addOtherForm()
    {
        return json([
            'err' => 0,
            'msg' => 'success',
            'forms' => [
                [
                    'formLabel' => '资源名称',
                    'formType' => 'input',
                    'formFlag' => 'need',
                    'formName'=> 'rname',
                    'formDescription' => '资源的名称，名称任意'
                ],
                [
                    'formLabel' => '资源文件',
                    'formType' => 'file',
                    'formFlag' => 'need',
                    'formName'=> 'videoFile',
                    'formDescription' => '资源文件'
                ],
                [
                    'formLabel' => '资源描述',
                    'formType' => 'text',
                    'formFlag' => 'need',
                    'formName'=> 'description',
                    'formDescription' => '资源的描述'
                ],
            ],
            'submit' => ''
        ]);
    }
    //add a resource
    /*flag 1: video/music, 2: image, 3:other
     *
     * */
    public function addResource(Request $request, $flag)
    {
        if (!Auth::checkPrivilege(Auth::$ADMIN))
            return json([
                'err' => 1,
                'msg' => '权限不足'
            ]);
        $data = [];
        if ($request->has("name"))
            $data['rname'] = $request->post('name');
        else
            return json([
                'err' => 2,
                'msg' => "需要资源名"
            ]);
        if ($request->has('description'))
            $data['description'] = $request->post('description');
        else
            return json([
                'err' => 3,
                'msg' => '需要资源描述',
            ]);
        switch ($flag) {
            case 1:
                $theName = "vedioFile";
                $theType = "vedio";
                $theExt = "mp4";
                break;
            case 2:
                $theName = "imageFile";
                $theType = "image";
                $theExt = "png,jpeg";
                break;
            case 3:
                $theName = "otherFile";
                $theType = "other";
                $theExt = null;
                break;
            default:
                return json([
                    'err' => 8,
                    'msg' => '未识别的标志'
                ]);
        }
        if ($request->has($theName,'file')) {
            $uploadfile = $request->file($theName);
            if ($uploadfile) {
                if($info = $uploadfile->validate(['size' => 10000000, 'ext' => $theExt])
                    ->move(ROOT_PATH.'/public/static/uploads')){
                    $data['media_link'] ='/static/uploads/'.$info->getSaveName();
                    $data['type'] = $theType;
                    $data['create_at'] = date('Y-m-d h:i:s');
                    $data['update_at'] = $data['create_at'];
                    $res = new Resources();
                    if($res->save($data))
                        return json([
                            'err' => 0,
                            'msg' => '成功',
                        ]);
                    else
                        return json([
                            'err' => 4,
                            'msg' => '数据库错误'
                        ]);
                }else{
                    return json([
                        'err' => 5,
                        'msg' => '文件不合法',
                    ]);
                }
            }else{
                return json([
                    'err' => 6,
                    'msg' => '未知错误'
                ]);
            }
        }else{
            return json([
                'err' => 7,
                'msg' => '需要资源文件'
            ]);
        }
    }
    //查询资源
    public function getResource($offset, $num)
    {
        $res = new Resources();
        $result = $res->limit($offset,$num)->order('create_at','desc')->select();
        if (empty($result)) {
            return json([
                'err' => 1,
                'msg' => '资源不存在',
            ]);
        }
        return json([
            'err' => 0,
            'msg' => '成功',
            'data' => $result,
        ]);
    }
    //通过id删除资源
    public function deleteResouce($id){
        if (!Auth::checkPrivilege(Auth::$ADMIN))
            return json([
               'err' => 1,
               'msg' => '权限不足'
            ]);
        $product = Resources::get($id);
        if ($product == null)
            return json([
                'err' => 2,
                'msg' => '该资源不存在'
            ]);
        if (!$product->delete())
           return json([
               'err' => 3,
               'msg' => '删除失败'
           ]);
        return json([
            'err' => 0,
            'msg' => '成功'
        ]);
    }
}

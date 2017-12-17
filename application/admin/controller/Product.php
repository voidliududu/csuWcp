<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Products;
use \Auth;

class Product extends Controller
{
    //初始化数据库，用以测试
    public function index()
    {
        Products::install();
    }
    //通过id获取产品详细信息
    public function getProductById($id)
    {
        $product = new Products;
        $result = $product->where('isdelete',0)->where('id' , $id)->select();
        if (empty($result)) {
            return json([
                'err' => 1,
                'msg' => '该商品不存在'
            ]);
        }
        return json([
            'err' => 0,
            'msg' => '成功',
            'data' => $result,
            'next' => Auth::getProductById($id + 1),
            'modify' => Auth::modifyProduct($id),
            'delete' => Auth::deleteProduct($id)
        ]);

    }
    //通过cate,offset, offset查询产品信息
    public function getProducts($cate,$offset, $num)
    {
        $product = new Products();
        if ($cate == 0)
            $result = $product->where('isdelete' , 0)->limit($offset,$num)->select();
        else
            $result = $product->where('isdelete' , 0)->where('cate',$cate)->limit($offset,$num)->select();
        if (empty($result)) {
            return json([
                'err' => 1,
                'msg' => '产品不存在',
            ]);
        }
        return json([
            'err' => 0,
            'msg' => '成功',
            'data' => $result,
            'next' => Auth::getProducts($cate,$offset+$num,$num)
        ]);
    }
    //通过工作室查询产品
    public function getProductByStudio($stuid)
    {
        $product = Products::get(['studio' => $stuid]);
        if ($product == null) {
            return json([
                'err' => 1,
                'msg' => '产品不存在'
            ]);
        }
        return json([
            'err' => 0,
            'msg' => '成功',
            'data' => $product
        ]);
    }
    //通过id更改产品
    public function modifyProduct($id){
        if (!Auth::checkPrivilege(Auth::$ADMIN))
            return json([
                'err' => 1,
                'msg' => '权限不足'
            ]);
        if ($id == null)
            return json([
                'err' => 2,
                'msg' => 'id不能为空'
            ]);
        $product = Products::get($id);
        if ($product == null)
            return json([
                'err' => 3,
                'msg' => '产品不存在'
            ]);
        $req = Request::instance();
        if ($req->has('pname', 'post'))
            $product->pname = $req->post('pname');
        if ($req->has('cate','post'))
            $product->cate = $req->post('cate');
        if ($req->has('studio'))
            $product->studio = $req->post('studio');
        if ($req->has('img'))
            $product->img = $req->post('img');
        if ($req->has('description'))
            $product->description = $req->post('description');
        if ($req->has('info_page'))
            $product->info_page = $req->post('info_page');
        $product->update_at = date('Y-m-d H;i:s');
        if($product->save())
            return json([
                'err' => 0,
                'mag' => '成功',
            ]);
        return json([
            'err' => 4,
            'msg' => '更改失败'
        ]);
    }
    //通过id删除产品
    public function deleteProduct($id){
        if (!Auth::checkPrivilege(Auth::$ADMIN))
            return json([
               'err' => 1,
               'msg' => '权限不足'
            ]);
        $product = Products::get($id);
        if ($product == null)
            return json([
                'err' => 2,
                'msg' => '该产品不存在'
            ]);
        $product->isdelete = 1;
        if (!$product->save())
           return json([
               'err' => 3,
               'msg' => '删除失败'
           ]);
        return json([
            'err' => 0,
            'msg' => '成功'
        ]);
    }
    //添加产品
    public function addProduct(){
        if (!Auth::checkPrivilege(Auth::$ADMIN))
            return json([
                'err' => 1,
                'msg' => '权限不足'
            ]);
        $product = new Products;
        $req = Request::instance();
        if (!$req->has('pname', 'post'))
            return json([
                'err' => 2,
                'msg' => '缺少产品名'
            ]);
        $product->pname = $req->post('pname');
        if (!$req->has('cate','post'))
            return json([
                'err' => 3,
                'msg' => '缺少分类名'
            ]);
        $product->cate = $req->post('cate');
        if ($req->has('studio'))
            $product->studio = $req->post('studio');
        if ($req->has('img'))
            $product->img = $req->post('img');
        if ($req->has('description'))
            $product->description = $req->post('description');
        if ($req->has('info_page'))
            $product->info_page = $req->post('info_page');
        $product->update_at = date('Y-m-d H;i:s');
        if($product->save())
            return json([
                'err' => 0,
                'mag' => '成功',
            ]);
        return json([
            'err' => 4,
            'msg' => '更改失败'
        ]);
    }
}

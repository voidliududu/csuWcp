<?php

namespace app\admin\model;

use think\Model;
use think\Db;
class Category extends Model
{
    //
    protected $table = 'category';
    protected $pk = 'id';
    public static function install(){
        $data = [
            [
                'catename' => '微电影',
                'description' => '微电影的描述',
                'catelogo' => null,
                'create_at' => date('Y-m-d H:i:s'),
                'update_at' => date('Y-m-d H;i;s')
            ],
             [
                'catename' => '微音乐',
                'description' => '微音乐的描述',
                'catelogo' => null,
                'create_at' => date('Y-m-d H:i:s'),
                'update_at' => date('Y-m-d H:i:s')
            ]
        ];
        //Db::table('category')->insert($data);
        (new Category)->saveAll($data);
    }
}

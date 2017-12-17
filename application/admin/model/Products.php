<?php

namespace app\admin\model;

use think\Model;
class Products extends Model
{
    //
    protected $table = 'product';
    protected $pk = 'id';

    public static function install(){
        $data = [
            [
                'pname' => '桥刊',
                'cate' => 2,
                'studio' => 2,
                'img' => 'http://e.hiphotos.baidu.com/image/pic/item/cc11728b4710b912d4556034cafdfc0393452267.jpg',
                'description' => '这是桥刊的描述',
                'info_page' => 'http://www.baidu.com',
                'create_at' => date('Y-m-d H:i:s'),
                'update_at' => date('Y-m-d H:i:s')
            ],
            [
                'pname' => '爱的力量',
                'cate' => 1,
                'studio' => 2,
                'img' => 'http://e.hiphotos.baidu.com/image/pic/item/cc11728b4710b912d4556034cafdfc0393452267.jpg',
                'description' => '这是爱的力量的描述',
                'info_page' => 'http://www.baidu.com',
                'create_at' => date('Y-m-d H:i:s'),
                'update_at' => date('Y-m-d H:i:s')
            ],
            [
                'pname' => 'appX',
                'cate' => 1,
                'studio' => 2,
                'img' => 'http://e.hiphotos.baidu.com/image/pic/item/cc11728b4710b912d4556034cafdfc0393452267.jpg',
                'description' => '这是appX的描述',
                'info_page' => 'http://www.baidu.com',
                'create_at' => date('Y-m-d H:i:s'),
                'update_at' => date('Y-m-d H:i:s')
            ],
        ];
        (new Products)->saveAll($data);
    }
}

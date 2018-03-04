<?php

namespace app\admin\model;

use think\Model;

class Resources extends Model
{
    protected $table = 'resource';
    protected $pk = 'id';
    public static function install()
    {
        $data = [
            [
                'rname' => 'testImage',
                'image_link' => 'http://f.hiphotos.baidu.com/zhidao/pic/item/0bd162d9f2d3572c74aa14438f13632763d0c3e1.jpg',
                'media_link' => '',
                'description' => '这是一个关于这个图片的描述',
                'type' => 'image',
                'create_at' => '',
                'update_at' => ''
            ],
            [
                'rname' => 'testImage',
                'image_link' => 'http://c.hiphotos.baidu.com/zhidao/pic/item/1f178a82b9014a909461e9baa1773912b31bee5e.jpg',
                'media_link' => '',
                'description' => '这是一个描述',
                'type' => 'image',
                'create_at' => '',
                'update_at' => ''
            ],
            [
                'rname' => 'testImage',
                'image_link' => 'http://e.hiphotos.baidu.com/zhidao/pic/item/ac345982b2b7d0a2284d772bcdef76094a369afb.jpg',
                'media_link' => '',
                'description' => 'this is a test string',
                'type' => 'image',
                'create_at' => '',
                'update_at' => ''
            ],
        ];
        (new Resources())->saveAll($data);
    }
}

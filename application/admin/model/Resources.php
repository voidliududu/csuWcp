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
                'name' => 'testImage',
                'image_link' => 'www',
                'media_link' => '',
                'description' => '',
                'create_at' => '',
                'update_at' => ''
            ],
        ];
    }
}

<?php

namespace app\admin\model;

use think\Model;

class Studio extends Model
{
    //
    protected $table = 'studio';
    protected $pk = 'id';
    public static function install(){
        $data = [
          [
              'studio_name' => '升华网视频团',
              'department' => '',
              'logo' => '',
              'description' => '视频团的描述',
              'info_page' => 'http://www.baidu.com',
              'create_at' => date('Y-m-d H:i:s'),
              'update_at' => date('Y-m-d H:i:s')
          ],
          [
              'studio_name' => '升华网信息部',
              'department' => '',
              'logo' => '',
              'description' => '视频团的描述',
              'info_page' => 'http://www.baidu.com',
              'create_at' => date('Y-m-d H:i:s'),
              'update_at' => date('Y-m-d H:i:s')
          ],
          [
              'studio_name' => '团委宣传部',
              'department' => '',
              'logo' => '',
              'description' => '视频团的描述',
              'info_page' => 'http://www.baidu.com',
              'create_at' => date('Y-m-d H:i:s'),
              'update_at' => date('Y-m-d H:i:s')
          ],
        ];
        (new Studio)->saveAll($data);
    }
}

<?php

namespace app\admin\model;

use think\Db;
use think\Model;

class User extends Model
{
    //
    protected $table = 'user';
    protected $pk = 'id';
    public static function testData(){
        Db::table('user')->insert([
            'account' => 'liududu',
            'password' => password_hash('liududu',PASSWORD_BCRYPT),
            'role' => 1,
            'create_at' =>date("Y-m-d H:i:s"),
            'update_at' => date("Y-m-d H:i:s"),
            'isdelete' => 0
        ]);
    }
}

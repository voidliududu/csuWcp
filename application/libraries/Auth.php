<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-10
 * Time: 上午12:20
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Auth
{
public function setAuth(){
    $this->load(session);
}
}
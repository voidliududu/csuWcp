<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-14
 * Time: 下午1:11
 */

defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function insertdb(){
        $info['NAME'] = 'HELLO';
        $info['CREATED'] = date('Y-m-d h:i:s');
        $this->db->insert('TEST',$info);
    }

    function updatedb(){
        $info['CREATED'] = date('Y-m-d h:i:s');
        $info['NAME'] = NULL;
        $this->db->where('ID',1)->update('TEST',$info);
    }
}
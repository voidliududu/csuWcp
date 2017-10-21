<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-21
 * Time: 下午1:20
 */

class Intro extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    /**
     * @param array $article author  content
     * @return array
     * */
    public function add($article)
    {
        if($this->db->insert('INTRO',$article))
            return ['flag' => true,'id' => $this->db->insert_id()];
        return ['flag' => false,'error' => 'database error'];
    }
}
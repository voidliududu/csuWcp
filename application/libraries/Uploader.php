<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-23
 * Time: 下午8:18
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Uploader
{
    protected $CI;
    protected $config;
    public function __construct($config = null)
    {
        $this->CI = &get_instance();
        $this->CI->load->helper('url');
        //$this->CI->load->library('upload');
        $this->config['upload_path']      = isset($config['upload_path']) ? $config['upload_path']
                :'/srv/http/codeIgniter/asset/upload/';
        $this->config['allowed_types']    = isset($config['allowed_types']) ? $config['allowed_types'] : 'gif|jpg|png';
        $this->config['max_size']         = isset($config['max_size'] ) ? $config['max_size'] : 2048;
//        $this->config['max_width']        = isset($config['max_width']) ? $config['max_width'] : 1024;
//        $this->config['max_height']       = isset($config['max_height']) ? $config['max_height'] : 768;
        $this->config['file_name']        = isset($config['file_name'] ) ? $config['file_name'] : time();
        $this->CI->load->library('upload',$this->config);
    }
    /**
     * 多图片文件上传
     * @param $files array $_FILE[''] 超全局数组
     * @return array flag字段标志结果，fileList为上传资源链接的数组
     * */
    //todo 检查$filename
    public function getPic($files)
    {
        if(empty($files))
            return ['flag' => false,'error' => 'empty file form'];
        $fileArray = [];
        foreach ($files as $filename => $fileObject) {
            $this->config['max_width']        = 1024;
            $this->config['max_height']       = 768;
            $this->CI->upload->initialize($this->config);
            if (!$this->CI->upload->do_upload($filename))
                return ['flag' => false, 'error' => $this->CI->upload->display_errors(),'config' => $this->config];
            $resource['RES_ADDR'] = base_url('asset/upload/').$this->CI->upload->data('file_name');
            //$resource['TYPE'] = $this->CI->upload->data('file_type');
            //$resource['REF'] = $stu_id;
            $resource['CREATED'] = date('Y-m-d H:i:s');
            array_push($fileArray,$resource);
        }
        return ['flag' => true,'fileList' => $fileArray];
    }
    /**
     * 视频及缩略图上传,返回视频链接数组
     * @param string $screen_shoot_name  缩略图表单名称
     * @param string $media_name 资源表单名称
     * @return array
     * */
    public function getMedia($screen_shoot_name,$media_name)
    {
        $result = [];
        $this->config['max_width']        =  1024;
        $this->config['max_height']       =  768;
        $this->CI->load->initialize($this->config);
        if (!$this->CI->upload->do_upload($screen_shoot_name))
            return ['flag' => false, 'error' => $this->CI->upload->display_errors()];
        $result['SCREEN_SHOOT'] = base_url('asset/upload/').$this->upload->data('file_name');
        //$result['SCREENSHOOT_TYPE'] = $this->CI->upload->data('file_type');
        $this->config['max_size']         =  2048*2048;
        $this->config['allowed_types']    = 'mp4|mp3';
        if(!$this->CI->upload->do_upload($media_name))
            return ['flag' => false, 'error' => $this->CI->upload->display_errors()];
        $result['RES_ADDR'] = base_url('asset/upload/').$this->upload->data('file_name');
        $result['CREATED'] = date('Y-m-d H:i:s');
        return ['flag' => true ,'result' => $result];
    }
}
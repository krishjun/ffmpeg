<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        require_once 'ffmpeg/FFmpegAutoloader.php';
        
        $moviePath = 'C:\exp\ffmpeg\bin\test.mkv';
        $ffmpeg = new FFmpegMovie($moviePath);
        echo $ffmpeg->getVideoCodec(); exit;
    }


}


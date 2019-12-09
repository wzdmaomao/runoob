<?php
class Site{
    var $url, $title;

    function __construct($par1, $par2)
    {
        $this->url = $par1;
        $this->title = $par2;
    }

    function setUrl($per){
        $this->url = $per;
    }

    function getUrl(){
        echo $this->url . PHP_EOL;
    }

    function setTitle($per){
        $this->title = $per;
    }

    function getTitle(){
        echo $this->title . PHP_EOL;
    }
}

class childSite extends Site{
    var $category;

    function setCate($par){
        $this->category = $par;
    }

    function getCate(){
        echo $this->category.PHP_EOL;
    }
}
$runoob = new childSite('www.runoob.com', '²ËÄñ½Ì³Ì');
$runoob->getTitle();
$runoob->setCate("web");
$runoob->getCate();
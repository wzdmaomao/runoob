<?php
class Site{
    var $url, $title;

    function setUrl($per){
        $this->url = $per;
    }

    function getUrl(){
        echo $this->url . '<br>';
    }

    function setTitle($per){
        $this->title = $per;
    }

    function getTitle(){
        echo $this->title . '<br>';
    }
}


$runoob = new Site;
$taobao = new Site;
$google = new Site;
// 调用成员函数，设置标题和URL
$runoob->setTitle("菜鸟教程");
$taobao->setTitle("淘宝");
$google->setTitle("谷歌搜索");

$runoob->setUrl( 'www.runoob.com' );
$taobao->setUrl( 'www.taobao.com' );
$google->setUrl( 'www.google.com' );

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl(); 
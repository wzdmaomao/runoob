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
// ���ó�Ա���������ñ����URL
$runoob->setTitle("����̳�");
$taobao->setTitle("�Ա�");
$google->setTitle("�ȸ�����");

$runoob->setUrl( 'www.runoob.com' );
$taobao->setUrl( 'www.taobao.com' );
$google->setUrl( 'www.google.com' );

// ���ó�Ա��������ȡ�����URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl(); 
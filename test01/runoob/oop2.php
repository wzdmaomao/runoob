<?php

class Site
{
    var $url, $title;

    function __construct($par1, $par2)
    {
      $this->url = $par1;
      $this->title = $par2;
    }

    function setUrl($per)
    {
        $this->url = $per;
    }

    function getUrl()
    {
        echo $this->url . '<br>';
    }

    function setTitle($per)
    {
        $this->title = $per;
    }

    function getTitle()
    {
        echo $this->title . '<br>';
    }
}


$runoob = new Site('www.runoob.com', '����̳�');
$taobao = new Site('www.taobao.com', '�Ա�');
$google = new Site('www.google.com', 'Google ����');

// ���ó�Ա��������ȡ�����URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();
<?php
$car=array("Volvo","BMW","Toyta");
//sort() - �����������������
//�����е�Ԫ�ذ�����ĸ��������
sort($car) ;
print_r($car);
//�����е�Ԫ�ذ���������������
$numbers=array(4,6,2,22,11);
sort($numbers);
print_r($numbers);
//rsort() - ��������н�������
//�����е�Ԫ�ذ�����ĸ��������
rsort($car);
print_r($car);
//�����е�Ԫ�ذ������ֽ�������
rsort($numbers);
print_r($numbers);
//asort() - ���ݹ��������ֵ�������������������
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
print_r($age);
//ksort() - ���ݹ�������ļ��������������������
ksort($age);
print_r($age);
//arsort() - ���ݹ��������ֵ����������н�������
//krsort() - ���ݹ�������ļ�����������н�������

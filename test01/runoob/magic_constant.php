<?php
namespace MyProject;
// echo '���ǵ�'. __LINE__ . '��';
echo '���ļ�λ��'. __FILE__ ;
/*__DIR__
�ļ����ڵ�Ŀ¼��������ڱ������ļ��У��򷵻ر��������ļ����ڵ�Ŀ¼��

���ȼ��� dirname(__FILE__)�������Ǹ�Ŀ¼������Ŀ¼����������ĩβ��б�ܡ���PHP 5.3.0��������*/
echo '<br>';
echo '���ļ�λ��'.__DIR__ ;
echo '<br>';
/*__FUNCTION__
�������ƣ�PHP 4.3.0 �¼ӣ����� PHP 5 �𱾳������ظú���������ʱ�����֣����ִ�Сд������ PHP 4 �и�ֵ����Сд��ĸ�ġ�*/
function  test(){
    echo '������Ϊ��'.__FUNCTION__ ;
}
test();
echo '<br>';
class testClass{
       function _print(){
           echo '����Ϊ��'  . __CLASS__ . "<br>";
           echo  '������Ϊ��' . __FUNCTION__ ;
       }
}
$t = new testClass();
$t->_print();
echo '<br>';
class Base{
    public function sayHello(){
        echo 'Hello';
    }
}
 /*__TRAIT__
Trait �����֣�PHP 5.4.0 �¼ӣ����� PHP 5.4.0 ��PHP ʵ���˴��븴�õ�һ����������Ϊ traits��

Trait �������䱻������������������ Foo\Bar����

�ӻ���̳еĳ�Ա������� SayWorld Trait �е� MyHelloWorld ���������ǡ�����Ϊ MyHelloWorld ���ж���ķ���һ�¡�����˳���ǵ�ǰ���еķ����Ḳ�� trait �������� trait �����ָ����˻����еķ�����*/
trait SayWorld{
    public function sayHello(){
        parent::sayHello();
        echo 'World';
    }
}
class MyHelloWorld extends Base{
    use SayWorld;
}
$o = new MyHelloWorld();
$o->sayHello();
echo '<br>';
/*__METHOD__
��ķ�������PHP 5.0.0 �¼ӣ������ظ÷���������ʱ�����֣����ִ�Сд����*/
function TestMethod(){
    echo '������Ϊ��'. __METHOD__;
}
test();
echo '<br>';
/*__NAMESPACE__
��ǰ�����ռ�����ƣ����ִ�Сд�����˳������ڱ���ʱ����ģ�PHP 5.3.0 ��������*/

echo '�����ռ�Ϊ��"', __NAMESPACE__, '"'; // ��� "MyProject"




<?php
namespace MyProject;
// echo '这是第'. __LINE__ . '行';
echo '该文件位于'. __FILE__ ;
/*__DIR__
文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。

它等价于 dirname(__FILE__)。除非是根目录，否则目录中名不包括末尾的斜杠。（PHP 5.3.0中新增）*/
echo '<br>';
echo '该文件位于'.__DIR__ ;
echo '<br>';
/*__FUNCTION__
函数名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该函数被定义时的名字（区分大小写）。在 PHP 4 中该值总是小写字母的。*/
function  test(){
    echo '函数名为：'.__FUNCTION__ ;
}
test();
echo '<br>';
class testClass{
       function _print(){
           echo '类名为：'  . __CLASS__ . "<br>";
           echo  '函数名为：' . __FUNCTION__ ;
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
Trait 的名字（PHP 5.4.0 新加）。自 PHP 5.4.0 起，PHP 实现了代码复用的一个方法，称为 traits。

Trait 名包括其被声明的作用区域（例如 Foo\Bar）。

从基类继承的成员被插入的 SayWorld Trait 中的 MyHelloWorld 方法所覆盖。其行为 MyHelloWorld 类中定义的方法一致。优先顺序是当前类中的方法会覆盖 trait 方法，而 trait 方法又覆盖了基类中的方法。*/
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
类的方法名（PHP 5.0.0 新加）。返回该方法被定义时的名字（区分大小写）。*/
function TestMethod(){
    echo '函数名为：'. __METHOD__;
}
test();
echo '<br>';
/*__NAMESPACE__
当前命名空间的名称（区分大小写）。此常量是在编译时定义的（PHP 5.3.0 新增）。*/

echo '命名空间为："', __NAMESPACE__, '"'; // 输出 "MyProject"




<?php
class MyDestructableClass {
    function __construct() {
        print "���캯��\n";
        $this->name = "MyDestructableClass";
    }

    function __destruct() {
        print "���� " . $this->name . "\n";
    }
}

$obj = new MyDestructableClass();
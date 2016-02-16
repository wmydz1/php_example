<?php
/**
 * Created by PhpStorm.
 * User: samchen
 * Date: 1/4/16
 * Time: 21:59
 */

//要指定一个布尔值，使用关键字 TRUE 或 FALSE 。两个都不区分大小写。

$foo  =  True ;  // assign the value TRUE to $foo

echo $foo;

echo "<br/><hr>";

$a  =  1234 ;  // 十进制数
$a  = - 123 ;  // 负数
$a  =  0123 ;  // 八进制数 (等于十进制 83)
$a  =  0x1A ;  // 十六进制数 (等于十进制 26)

echo  $a;
echo "<br/><hr>";

$a  =  1.234 ;
$b  =  1.2e3 ;
$c  =  7E-10 ;
echo $c;

echo "<br/><hr>";
echo '在单引号字符串中的变量和特殊字符的转义序列将不会被替换。';
echo  'this is a simple string' ;
echo  '如果字符串是包围在双引号（"）中， PHP 将对一些特殊的字符进行解';
echo "<br/><hr>";

$array  = array(
    "foo"  =>  "bar" ,
    "bar"  =>  "foo" ,
);
var_dump($array) ;

echo "<br/><hr>";

//对象初始化要创建一个新的对象 object ，使用 new 语句实例化一个类


class  foo
{
    function  do_foo ()
    {
        echo  "Doing foo." ;
    }
}

$bar  = new  foo ;
$bar -> do_foo ();



echo "<br/><hr>";

$obj  = (object)  'ciao' ;
echo  $obj -> scalar ;

echo "<br/><hr>";


$as  =  1 ;  /* global scope */

function  Test ()
{
    global $as;
    echo $as ;  /* reference to local scope variable */
}
Test();
echo "<br/><hr>";

class  MyClass
{
    const  constant  =  'constant value' ;

    function  showConstant () {
        echo   self :: constant  .  "\n"." from function <br/>" ;
    }
}

$class  = new  MyClass ();
$class -> showConstant ();

echo  $class :: constant . "\n" ;  //

echo "<br/><hr>";
class  BaseClass  {
    function  __construct () {
        print  "In BaseClass constructor\n <br/>" ;
    }
}

class  SubClass  extends  BaseClass  {
    function  __construct () {
        parent :: __construct ();
        print  "In SubClass constructor\n <br/>" ;
    }
}

class  OtherSubClass  extends  BaseClass  {
    // inherits BaseClass's constructor
}

// In BaseClass constructor
$obj  = new  BaseClass ();

// In BaseClass constructor
// In SubClass constructor
$obj  = new  SubClass ();

// In BaseClass constructor
$obj  = new  OtherSubClass ();

echo "<br/><hr>";


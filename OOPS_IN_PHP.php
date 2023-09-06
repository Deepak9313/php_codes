<?php
namespace html;
include "html.php";
//Initialisation of a class 
class fruit{
    public $name;
    public $color;
    protected $price = 40;
    private $username = "deepak";
    public function __construct($a,$b){
        $this->name = $a;
        $this->color = $b;
    }
    public function result(){
        echo "The fruit is $this->name and color is $this->color and username is $this->username";
    }
    public function __destruct()
    {
        echo "<br>The name is deleted $this->name<br>";
    }
}
$obj1 = new fruit("apple","red");
$obj1->result();
/*
There are three access identifiers in oops
    public : anyone can access the property of a class
    private : only the class function can access the property of a class
    protected : only the base and class function access the property
*/
class another extends fruit{
    public function price(){
        echo "the price is $this->price";
    }
}
$obj2 = new another("watermelon","green");
$obj2->price();
//Inheritance in php
// we use inheriteance using extends keyword all the public and protected modifiers accessible in derived class
// final class is used when do not want inhert the class
final class person{
    public $name;
    function __construct($a)
    {
        $this->name = $a;
    }
}
echo "<br>";
//class constants if we want to echo the constant we use :: operator
class good{
    const message = "This is a constant message";
    // we can use constant in function using self
    function result(){
        echo self::message;
    }
}
$obj2 = new good();
print_r($obj2::message);
echo $obj2->result();
echo "<br>";
/*
Abstract classes and methods are when the parent class has a named method, 
but need its child class(es) to fill out the tasks.
----------An abstract class is a class that contains at least one abstract method. An abstract method is a 
        method that is declared, but not implemented in code------
*/
abstract class parentclass{
    public $name;
    public function __construct($a)
    {
        $this->name = $a;
    }
    abstract public function intro():string;
    abstract public function intro1():int;
    abstract public function intro2():float;
}
class obj1 extends parentclass{
    public function intro():string{
        return "The name is $this->name and the value is in string";
    }
    public function intro1():int{
        return "The name is $this->name and the value is in integar";
    }
    public function intro2():float{
        return "The name is $this->name and the value is in float";
    }
}
$obj3 = new obj1(33);
print_r($obj3->intro());
// php doesn't support function overloading
# INTERFACES IN PHP
/*
Interface are similar to abstract classes. The difference between interfaces and abstract classes are:
--->Interfaces cannot have properties, while abstract classes can
--->All interface methods must be public, while abstract class methods is public or protected
--->All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
--->Classes can implement an interface while inheriting from another class at the same time
*/
interface Animal{
    public function sound();
}
class cat implements Animal{
    public function sound(){
        echo "<br>meow<br>";
    }
}
$obj4 = new cat;
echo $obj4->sound();
// Trait in PHP
// so why we use traits
// Ans :- php only support single inheritance so if we want to use multiple inhertance we use traits
trait  traitname{
    public $name;
    public function __construct($a){
        $this->name = $a;
    }
}
class b{
    use traitname;
    //for using multiple trait write use trait1,trait2
    public function result(){
        echo "<br>The name in trait is $this->name<br>";
    }
}
$obj5 = new b("jean grey");
$obj5->result();
//Static method in php 
// we use static method if we want to call the function without creating the instance or direct call
class tony{
    protected static $age = 45;
    public function welcome(){
        self::initiate();
    }
    public static function initiate(){
        echo "<br>This is a normal <b>Electormagent</b> Upgrade if you want to <mark>live</mark><br>";
    }
}
tony::initiate();
class mark1 extends tony{
    public static function init(){
        echo parent::$age;
    }
}
mark1::init();
// PHP NAMESPACES
// if you want to use namespace declare namespace in both files
//namespace used for encapsulation the data and it break the program in several parts if you use
// namespace in html.php and then you have to declare namespace in oops also otherwise it will genetate a error
$table = new table();
$table->message();
//Iterables in php
// if we want to iterate the array using function we use iterable
$arr = ["a","b","c"];
function printiter(iterable $myiter){
    foreach($myiter as $item){
        echo $item."<br>";
    }
};
$obj6 = printiter($arr);
?>
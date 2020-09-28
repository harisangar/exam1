<?php 
Class Animal
{
 public $family;
 public $food; 
 
Public function __construct($family, $food){
 $this->family = $family;
 $this->food  = $food;
 }

Public function decl(){
	echo "The animal is {$this->family} and food is $this->food";

} 
} 
 
Class Cat extends Animal{
Public function message(){
echo "i am from the cat class";
}
}
$cat = new Cat("cat","fish");
$cat->message();
$cat->decl();
?> 
<?
class myClass{
 public $prop1 = "I'm a class property";//determinating a class property, the word "public" determinates the visivility of the property

 public function setProperty($newval){
  $this->prop1 =$newval; // we can use $this when working within a method to make reference to the object (the same object that is outside of the class.
 }

 public function getProperty(){
  return $this->prop1 . "<br />";
 }

}

$obj = new myClass; //Storing a class in the variable $obj
//var_dump($obj);

//echo $obj->prop1; //Calling a property of the object $obj

echo $obj->getProperty(); // Calling a function

$obj->setProperty("I'm a new value for the property");

echo $obj->getProperty();

?>

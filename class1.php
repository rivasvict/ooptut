<? 

class MyClass{                  //Creating a class
        //class properties and methods go here
        public $prop1 = "I'm a class property!";//the word "public" defines the visibility of a class property

	public function setProperty($newval){
		$this->prop1 = $newval;			//Inside the class we call the object with "this" word
	}
	public function getProperty(){
		return $this->prop1 . "<br />";
	}
}
//Creating two objects
//$obj = new MyClass;             //Storing a class in  a variable by using "new"
//$obj2 = new MyClass;

//var_dump($obj);

//echo $obj->prop1;//calling a class property

//$obj->setProperty("I'm the new definition for this property");//Calling a function defined inside the class

//echo $obj->getProperty();

//Get the value ofv $prop1 from both objects
//-----echo $obj->getProperty();
//-----echo $obj2->getProperty();

//Set new values for both objects
//-----$obj->setProperty("obj1");
//-----$obj2->setProperty("obj2");

//Output both objects $prop1 value
//-----echo $obj->getProperty();
//-----echo $obj2->getProperty();
?>


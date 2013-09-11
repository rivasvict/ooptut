
<?

class MyClass{                  //Creating a class
        //class properties and methods go here
        public $prop1 = "I'm a class property!";//the word "public" defines the visibility of a class property

        public function __construct(){//This magic method is trigged once a new object is created
                echo 'The class"', __CLASS__, '" was initiated!<br />';
		//echo "hola <br />";
        }
        public function __destruct(){//This magic method is trigged once the object
                //echo 'This class was destroyed <br />';
		echo "destroyed <br />";
        }
	public function __tostring(){//This method allows you to return the object as a string
		return "";
	}
        public function setProperty($newval){
                $this->prop1 = $newval;                 //Inside the class we call the object with "this" word
        }
        public function getProperty(){
                return $this->prop1 . "<br />";
        }
}
//$obj = new MyClass;
//echo 'destination" ', $obj, ' "I know';
//$obj->setProperty("This is the new name of my property");
//echo $obj->getProperty();
//echo $obj;
//unset($obj);//This method destroyes the object inmediatly
//echo "This is the end of the class <br />";

//--------------------------------INHERINANCE-----------------------------------

//Inheritance uses the word extends to indicate that the current class inherit from a class existent
//For instance the class myOtherlass inherit properties and functions from the class MyClass
class myOtherClass extends MyClass{
 public function setProperty(){//Overwriting a method
  return $this->prop1 . "<br />";
 }

//Adding functions to an existing method preserving the old ones
//we do this by means of "::" sintax
public function __construct(){
	parent::__construct();// Call the parent class's constructor
	echo "A new constructor in ". __CLASS__ .".<br />";
}

}

$myOtherObject = new myOtherClass;

//$myOtherObject->setProperty("This is the other object using methods and properties from MyClass class");
echo $myOtherObject->setProperty();

?>

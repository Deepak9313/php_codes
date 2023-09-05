<?php
//string
//integar
//float
//array
//object
//null
//boolean
//resource
$str = "this is a string";
$int = 23;
$float = 343.434;
$arr = array("name"=>"red","color"=>"green","third_color"=>"crimson");
class person{
    public $pid;
    public $age;
    public function __construct($pid,$age)
    {
        $this->pid = $pid;
        $this->age = $age;        
    }
    public function result(){
        echo "the person id is ".$this->pid." and the age is ".$this->age;
    }
};
$obj = new person(1,"astro");
$obj->result();
// print_r($obj);
$null = null;
var_dump($null);
// Open a file for reading
$fileHandle = fopen("example.txt", "r");

// Check if the file handle is a resource
if (is_resource($fileHandle)) {
    echo "File opened successfully. Resource type: " . get_resource_type($fileHandle) . "\n";

    // Read and output the contents of the file
    while (($line = fgets($fileHandle)) !== false) {
        echo $line;
    }

    // Close the file handle
    fclose($fileHandle);
} else {
    echo "Failed to open the file.";
}

?>
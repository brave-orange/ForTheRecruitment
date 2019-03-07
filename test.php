<?php
require ('class.php');
class Test_class{
    private $greeter;
    public function __construct(){
        $this->greeter = new MyGreeter\Client();
    }
    public function test_getGreeting(){
        $result = ['Good morning','Good afternoon','Good evening'];
        if($this->greeter->getGreeting() == ""){
            return "none return";
        }else{
            if(!in_array($this->greeter->getGreeting(), $result)){
                return "wrong answer!";
            }else{
                $time = (int)date('H');
                $res = $time >12 ? $result[0] : $time<=18 ? $result[1] : $result[2];
                if($this->greeter->getGreeting() != $res){
                    return "wrong answer!";
                }
            }
            return "Answer is ok!";
        }    
    }
    public function test_Instance($class_name)
    {
        if(get_class($this->greeter)!=$class_name){
            return "class name worong";
        }else{
            return "Class name is ok!";
        }
    }

    
}

$t = new Test_class();
echo $t->test_getGreeting();
echo $t->test_Instance('MyGreeter\Client');



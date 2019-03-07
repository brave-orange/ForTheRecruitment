<?php
namespace MyGreeter;
class Client{
    private $message;
    public function getGreeting(){
        $time = (int)date('H');
        if($time < 12){
            $this->message = "Good morning";
        }else if($time >=12 and $time <=18){
            $this->message = "Good afternoon";
        }else{
            $this->message = "Good evening";
        }
        return $this->message;
    }
}
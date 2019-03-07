<?php
namespace MyGreeter;
class Client{
    private $message;
    public function getGreeting(){
        $result = ['Good morning','Good afternoon','Good evening'];
        $time = (int)date('H');
        $this->message = $time >12 ? $result[0] : $time<=18 ? $result[1] : $result[2];
        return $this->message;
    }
}

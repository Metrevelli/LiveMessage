<?php
include 'db/dbHelper.php';

class Message extends dbHelp{
    public function __construct(){
        parent::__construct();
    }
    public function insertMessage($message){
        $messageCode = $this->checkMessageCode();
        echo $messageCode;
        parent::insert('messageData',array('messageCode' => $messageCode,'messagebody' => $message));
    }
    private function checkMessageCode(){
        $code = $this->generateMessageCode();
        $check  = parent::select('messageCode','messageData',array('messageCode' => $code));
        return $check ? $this->checkMessageCode() : $code;
    }
    private function generateMessageCode(){
        $seed = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $str = '';
        for($i = 0; $i <= 8; $i++){
            $str .= substr($seed, mt_rand(0, strlen($seed) -1), 1);
        }
        return $str;
    } 
}

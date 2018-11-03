<?php
include 'db/dbHelper.php';

class Message extends dbHelp{

    protected $messageCode;

    public function __construct(){
        parent::__construct();
    }
    public function insertMessage($message){
        $messageCode = $this->checkMessageCode();

        $messageData = $message;
        $backgroundImgExt = end(explode('.',$message['message_background']));
        $messageData['message_background'] = $messageCode.'.'.$backgroundImgExt;

        parent::insert('messageData',array('messageCode' => $messageCode,'messagebody' => json_encode($messageData)));
        $this->messageCode = $messageCode;
        echo $_SERVER['SERVER_NAME'].'/livemessage/view.php?mc='.$messageCode;
    }
    public function getMessage($code){
        $message = parent::select('messageBody','messageData',array('messageCode' => $code));
        echo $message ? $message[0]['messageBody'] : '';
    }
    public function getMessageCode(){
        return $this->messageCode;
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

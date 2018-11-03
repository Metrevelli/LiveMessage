<?php
include 'class/Message.php';
include 'class/Image.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['text'])){
        $text = $_POST['text'];
        $messageData  = array('message_background' => $_FILES['file']['name'] ,'message_body' => $text);
        $message = new Message();
        $message->insertMessage($messageData);
        $image = new Image($_FILES['file']);
        $image->upload('background/',$message->getMessageCode());
    }
}
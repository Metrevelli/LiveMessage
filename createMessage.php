<?php
include 'class/Message.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['text'])){
        $text = $_POST['text'];
        $message = new Message();
        $message->insertMessage($text);
    }
}
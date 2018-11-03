<?php
include 'class/Message.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['mc'])){
        $code = $_POST['mc'];
        $message = new Message();
        $message->getMessage($code);
    }
}
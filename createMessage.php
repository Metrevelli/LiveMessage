<?php
include 'class/Message.php';
include 'class/File.php';

// function reArrayFiles(&$file_post) {

//     $file_ary = array();
//     $file_count = count($file_post['name']);
//     $file_keys = array_keys($file_post);

//     for ($i=0; $i<$file_count; $i++) {
//         foreach ($file_keys as $key) {
//             $file_ary[$i][$key] = $file_post[$key][$i];
//         }
//     }

//     return $file_ary;
// }



if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['text'])){
        $text = $_POST['text'];
        $messageData  = array('message_background' => $_FILES['image']['name'] , 'message_music' => $_FILES['music']['name']  ,'message_body' => $text);
        $message = new Message();
        $message->insertMessage($messageData);
        if(!empty($_FILES['music'])){
            $music = new File($_FILES['music'],['wav', 'mp3', 'aac', 'ogg'],15728640);
            $music->upload('music/',$message->getMessageCode());
        }
        if(!empty($_FILES['image'])){
            $image = new File($_FILES['image'],['jpg', 'jpeg', 'png', 'gif'],15728640);
            $image->upload('background/',$message->getMessageCode());
        }
    }
}
 <?php
  

function send_LINE($msg){
 $access_token = 'RVPWj6aEOnRaw6bo/n8u9+W2Sxb7VQlCJ32AzvkqdHjSbPEIR+6I6btcmbozz4Y8eVx6J2n0guQ4TFAVlf8Ihwudfs3Zw/5SbM81x0NrvRk5IXYpzHFhMkWBtXGZdKqqSV+JSH61mNvU+P89RkraLAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U71734c3d0e820238458c6a5c8c644ca8',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>

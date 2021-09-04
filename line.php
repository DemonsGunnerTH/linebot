 <?php
  

function send_LINE($msg){
 $access_token = '9CKQ/tUZFQe9lO3YQV9KNdj7sli/PJ+sqA4FwHWp+JeHPeBxMLTwi6qzIlJ0+BrepdPd2O2ggPILijkfQNgyVZIwLyVx06msBSgHjGcHfbNs+J4zg2Ci6EKlMfn4tIJ9zMOcL8nOMUQZESLOIfaD3gdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '#ใส่ ID HERE',
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

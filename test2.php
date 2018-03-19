<?php
   if(!empty($_POST)) {
       $to = 'salavatkhaydarov@gmail.com';
       $subj = $_POST[0];
       $msgarray = json_decode($_POST['callbackform'], true);
        $msg = '';
       foreach($msgarray as $key => $value) {
           $msg .= $key.': '.$value.'
           ';
       }
       //if(mail($to, $subj, $msg, join("\r\n", array('From: webmaster@atis.ru', 'X-Mailer: PHP7')))) echo $to.'<br>'.$subj.'<br>'.$msg;
       if(mail('salavatkhaydarov@gmail.com', 'Заявка от ATIS', $msg, 'Content-type: text/html;')) print_r($msgarray);
       else echo false;
   }

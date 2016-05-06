<?php

include 'CritSendphpconnector.php'

$mxm = new MxmConnect();

$content = array(
   'subject'=> 'My subject',
   'html'=> '<html><body><H1> TEST CONTENT</H1></body></html>' ,
   'text' =>'Test content'
);

$param = array(
   'tag'=>array(
      'test',
      'test2'
   ), 
   'mailfrom'=> 'noreply@critsend.com', 
   'mailfrom_friendly'=> 'Sender Exemple', 
   'replyto'=>'ntoper@critsend.com', 'replyto_filtered'=> 'true');

$emails[] = array(
   'email'=>'happy@customer.com', 
   'field1'=> 'test'
);
$emails[] = array(
   'email'=>'new@customer.com', 
   'field1'=> 'test'
);

}
   try {
      echo $j;
      print_r($mxm->sendCampaign($content, $param, $emails));
   } catch (MxmException $e) {
   echo $e->getMessage();
}

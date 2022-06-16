<?php
function sendline($msg,$group){

//Test System
  switch($group){    
	case 'TES' : $token = 'xxxxxxxxxxxx'; break;	
    default : $token='-'; break; 

  }  
 

  $headers = array('Method: POST', 'Content-type: multipart/form-data', 'Authorization: Bearer '.$token );

//curl_setopt($ch,CURLOPT_PROXY,"10.11.5.180:80");

  $ch = curl_init();	
	curl_setopt($ch,CURLOPT_URL,"https://notify-api.line.me/api/notify");
	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$msg);
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);


  $result = curl_exec( $ch );
  
  //Check error
  if(curl_error($ch)) {
    //echo 'error:' . curl_error($ch);
  }else {
    $result_ = json_decode($result, true);
    //echo "status: ".$result_['message'];
  }
  curl_close($ch); 
  //Close connect
}

?>

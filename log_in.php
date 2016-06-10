<?php

  $url = "https://demo.c2gocard.com/j_spring_security_check?j_username=apitest&j_password=C2GOtest&mobile=true";
  $result  = file_get_contents($url);
 
  $arr = json_decode($result);
  
 
 
  foreach($arr as $v)
  {
 	echo  $token = $v->token;
  }
  
  
?>

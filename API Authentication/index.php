<?php

//checking for username and password 
 if($_SERVER['PHP_AUTH_USER'] !== 'admin' || $_SERVER['PHP_AUTH_PW'] !== 'admin') {
      // header for authentication of user
      header("WWW-Authenticate: Basic realm=\"Authuser\"");
      
      header("HTTP\ 1.0 401 unauthorised");
      // echo error when user refused to authentication 
      echo "error";
      exit;
 }
// If the user is authorized 
 else
 {
    // If GET request is received 
 if ($_SERVER['REQUEST_METHOD'] == "GET") {
   
    echo "Logged In";
	
    http_response_code(200);
  } 
   // if any other request is made  
   else 
  {
     http_response_code(405);
  }
}


?>
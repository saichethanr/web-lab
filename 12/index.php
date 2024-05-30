<?php
   if($_SERVER["REQUEST_METHOD"]=="POST"){
      $username = $_POST["name"];
      $password  = $_POST["password"];

      $file = fopen("login.txt","r");

      $content = fgets($file);
      if($content == $username + ":" + $password){
        echo "alert('Access granted!')";    
      }
      else{
        echo "alert('Incorrect')";
      }

   }
?>

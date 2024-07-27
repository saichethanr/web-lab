<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
    $num = $_POST['num'];
    $flag =0;
    for($i=0;$i<=sqrt($num);$i++){
        if($num%$i==0){
            $flag=1;
            break;
        }
    }
    if($flag==0){
        echo "Entered number is a prime number";
    }
    else{
        echo "entered number is not a prime number";
    }

 }

?>
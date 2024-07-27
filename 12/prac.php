<script>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $file = fopen('login.txt','r');
    $content = fgets($file);
    if($content == $user . ':' . $pass){
        echo "alert('Acess Granted')";
    }
    else{
        echo "alert('Acess Denied')";
    }

}
?>
<script>

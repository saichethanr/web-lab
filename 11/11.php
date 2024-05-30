<?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $info  = $_POST["info"];
            $info_file = fopen("info.txt","w");
            fwrite($info_file,$info);
            fclose($info_file);
        }
    ?>
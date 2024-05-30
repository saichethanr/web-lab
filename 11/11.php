<?php
        if(_SERVER["REQUEST_METHOD"]=="POST"){
            $info  = $_POST["info"];
            $info_file = fopen("info.txt","w");
            fwrite($info_file,$info);
            fclose($info_file);
        }

        $file = fopen('info.txt','r');
        if($file){
            while($line = fgets($file) !==false){
                echo "<p>$line<p>";
            }
            fclose($file);
        }

    ?>
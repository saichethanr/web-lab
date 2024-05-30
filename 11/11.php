<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12th prog</title>
</head>
<body>
    <?php
        if(_SERVER["REQUEST_METHOD"]=="POST"){
            $info  = $_POST["info"];
            $info_file = fopen("info.txt","w");
            fwrite($info_file,$info);
            fclose($info_file);
        }
    
    ?>
    <form  method="post">
        <label>Information</label>
        <textarea name="info" id="info" rows="20" cols="80"></textarea>
        <input type="submit"><label >submit</label>
        <input type="reset"><label >reset</label>

        <div class="saved">
            <h1>saved Information</h1>
            <?php
                $file = fopen('info.txt','r');
                if($file){
                    while($line = fgets($file) !==false){
                        echo "<p>$line<p>";
                    }
                    fclose($file);
                }

            ?>
        </div>
      
    </form>
</body>
</html>
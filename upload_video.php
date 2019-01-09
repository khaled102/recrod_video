<?php
 
if(isset($_FILES["video"])){
    // Define a name for the file
    $videoname  = time().'my_intro_video'.'.webm';

    // In this case the current directory of the PHP script
    $uploadDirectory = './'. $videoname;
    
    // Move the file to your server
    if (!move_uploaded_file($_FILES["video"]["tmp_name"], $uploadDirectory)) {
        echo("Couldn't upload video !");
    }
}else{
    echo "No file uploaded";
}
 
?>
<?php
header("Access-Control-Allow-Origin: *");

    echo insert_base64_encoded_image_src($_GET['url']);

    
    function insert_base64_encoded_image_src($img, $echo = false){
        $imageSize = getimagesize($img);
        $imageData = base64_encode(file_get_contents($img));
        $imageSrc = "data:{$imageSize['mime']};base64,{$imageData}";
        if($echo == true){
          echo $imageSrc;
        } else {
          return $imageSrc;
        }
      }
?>
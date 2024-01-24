<?php

$imageUrl = "https://example.com/image.jpg";
$imageName = "image.jpg";
$destinationPath = "qr imgs/";

$imageContent = file_get_contents($imageUrl);
file_put_contents($destinationPath . $imageName, $imageContent);



?>


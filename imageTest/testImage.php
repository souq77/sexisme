<?php
// (A) OPEN IMAGE
$img = imagecreatefromjpeg("balloon.jpg");

// (B) WRITE TEXT
$txt = "Hello Baby";
$fontFile = "C:\Windows\Fonts\arial.ttf"; // CHANGE TO YOUR OWN!
$fontSize = 24;
$fontColor = imagecolorallocate($img, 255, 255, 255);
$posX = 5;
$posY = 24;
$angle = 0;
imagettftext($img, $fontSize, $angle, $posX, $posY, $fontColor, $fontFile, $txt);

// (C) OUTPUT IMAGE
// (C1) DIRECTLY SHOW IMAGE
/*header("Content-type: image/jpeg");
imagejpeg($img);
imagedestroy($img);*/
var_dump($img);

// (C2) OR SAVE TO A FILE
$quality = 100; // 0 to 100
imagejpeg($img, "demo.jpg", $quality);

?>
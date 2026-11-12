
<?php
session_start();

// Tao ma CAPTCHA
$string = md5(time());
$string = substr($string, 0, 6);

// Luu ma CAPTCHA vao Session
$_SESSION['captcha'] = $string;

// Tao hinh anh
$img = imagecreate(150, 50);

// Tao mau
$background = imagecolorallocate($img, 0, 0, 0);
$text_color = imagecolorallocate($img, 255, 255, 255);

// Hien thi chuoi CAPTCHA
imagestring($img, 4, 40, 15, $string, $text_color);

// Xuat hinh anh
header("Content-type: image/png");
imagepng($img);
imagedestroy($img);
?>

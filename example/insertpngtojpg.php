<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>在網頁中插入圖片的測試</title>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
  //背景圖片路徑
  $srcurl = './img/1079544.png';
  //目標圖片路徑
  $desurl = './img/begin.png';

  //建立源圖的例項
  $src = imagecreatefromstring(file_get_contents($srcurl));
  //建立點的例項
  $des = imagecreatefrompng($desurl);
  //獲取點圖片的寬高
  list($point_w, $point_h) = getimagesize($desurl);

  //重點：png透明用這個函式
  imagecopy($src, $des, 970, 1010, 0, 0, $point_w, $point_h);
  imagecopy($src, $des, 930, 1310, 0, 0, $point_w, $point_h);

  header('Content-Type: image/jpeg');
  imagejpeg($src);
  imagedestroy($src);
  imagedestroy($des);

?>
<?php require "footer.php" ?>

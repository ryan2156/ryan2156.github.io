<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>在網頁中插入圖片的範例</title>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
include
<?PHP
/*
*$sourePic:原圖路徑
* $smallFileName:小圖名稱
* $width:小圖寬
* $heigh:小圖高
* 轉載註明 www.chhua.com*/
function pngthumb($sourePic,$smallFileName,$width,$heigh){
$image=imagecreatefrompng($sourePic);//PNG
imagesavealpha($image,true);//這裡很重要 意思是不要丟了$sourePic影象的透明色;
$BigWidth=imagesx($image);//大圖寬度
$BigHeigh=imagesy($image);//大圖高度
$thumb = imagecreatetruecolor($width,$heigh);
imagealphablending($thumb,false);//這裡很重要,意思是不合並顏色,直接用$img影象顏色替換,包括透明色;
imagesavealpha($thumb,true);//這裡很重要,意思是不要丟了$thumb影象的透明色;
if(imagecopyresampled($thumb,$image,0,0,0,0,$width,$heigh,$BigWidth,$BigHeigh)){
imagepng($thumb,$smallFileName);}
return $smallFileName;//返回小圖路徑 轉載註明 www.chhua.com
}
pngthumb("a.png", "c.png", 300, 300);//呼叫
?>
<?php require "footer.php" ?>

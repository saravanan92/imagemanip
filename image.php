<?php

$name=$_FILES['file']['name'];
  echo "Upload: " . $_FILES["file"]["name"] . "<br>   ";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024). "<br>";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];

$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if(file_exists("/var/www/imagemanip/upload/".$_POST["file"]["name"]))
{
echo $_FILES['file']['name']."already exist.";
}
else
{
move_uploaded_file($_FILES["file"]["tmp_name"],"/var/www/imagemanip/upload/".$FILES["file"]["name"]); 
echo "Stored in: " . "/var/www/imagemanip/upload/" . $_FILES["file"]["name"];

}


/*

$bookname =$_POST['book_name'];
$authorname =$_POST['author_name'];

$grey = imagecolorallocate($image, 64, 64, 64);
$black = imagecolorallocate($image, 0, 0, 0);
$font = './TAMu_Kalyani.ttf';

imagettftext($image, 25, 0,100,100,$black,$font,$bookname);
imagettftext($image,25,0,500,700,$black,$font,$authorname); 


$image = imagecreatefromjpeg($name);
header('Content-Type: image/jpg');
imagejpeg($image);
imagedestroy($image);  
*/
?>


<?php


	//generate recapcha 
function generateRandomString($length = 25) {
    $characters = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)]. ' ';
    } 

    return $randomString;
}
$myRandomString = generateRandomString(5);
 $text = $myRandomString;

	//create img
$img = imagecreate(180, 60);
$green = imagecolorallocate($img, 645, 645, 45);
$white = imagecolorallocate($img, 255, 255, 255);
imagefilledrectangle($img, 0, 0, 500, 300, $green);
imagestring($img, 5, 65, 20, $text, $white);

$line_color = imagecolorallocate($img, 64,64,64); 
for($i=0;$i<6;$i++) {
    imageline($img,0,rand()%50,200,rand()%50,$line_color);
}

imagepng($img, "recapcha.png");
echo "<img src = 'recapcha.png'>";
?>
<?php
    require __DIR__ . "/vendor/autoload.php";
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Read QR images</title>
  <meta name="description" content="Description Goes Here">
  <link rel="stylesheet" href="style.css">
</head>
<body>
	<form action = "#" method = "POST" enctype='multipart/form-data'>
		<input type = "file" name = "file">
		<input type = "submit" name = "submit">
	</form>


</body>
</html>
<?php

	if(isset($_POST['submit'])){
		
    $file = $_FILES['file'];
    //print_r($file);
    $fileName = $_FILES['file']['name'];
    $fileType = $_FILES['file']['type'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileError = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];

    $fileExt = explode(".",$fileName);
    $fileActualExt = strtolower(end($fileExt));
    //echo $fileActualExt;

    $allow = array('jpg');

    if(in_array($fileActualExt,$allow)){
      if($fileSize < 50000){
        if($fileError === 0){

          $fileNewName = uniqid('',true);
          $filenewNameWithFormat = $fileNewName.".".$fileActualExt;
          $fileDirection = "qrImages/".$filenewNameWithFormat;

          if(move_uploaded_file($fileTmpName,$fileDirection) === true){    

		  
			$qrcode = new Zxing\QrReader($fileDirection);
			$text = $qrcode->text();
			echo $text;
			exit;
			
          }
          }else{
            echo "upload faild";
          }
        }else{
        echo 'This file too big for me!';
        }
      }else{
      echo 'You cant upload this File!';
    }
		
	};
	
	
   
?>

<?php
	session_start();
  error_reporting(0);
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Recapcha</title>
  <meta name="description" content="Description Goes Here">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "container">
    <?php include 'generate.php';
	   $_SESSION['text'] = $text;

	?> 
    <form action = "check.php" method = "POST" >  
    <input type = "text" name = "input" placeholder = "enter code here" required>
    <input type = "submit" name = "submit"><br>
    
</form>
</div>
   
</body>
</html>

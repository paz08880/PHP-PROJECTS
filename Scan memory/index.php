<?php
	$space = array(); 
	$HARD_DISC = array("D:", "C:");
	for($i = 0; $i< 2; $i++){
	$var = '';
	$bytes = disk_free_space($HARD_DISC[$i]);
    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
    $base = 1024;
    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
    //echo $bytes . '<br />';
	$var = sprintf('%1.2f' , $bytes / pow($base,$class)) . ' ' . $si_prefix[$class] . '<br />';
	array_push($space,$var);
	}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Scan memory</title>
</head>
<body>


    <div class = "container">
    <h1> Scan Memory </h1>
    <div class = "box">
        <div class="logo">
            <i class="fas fa-database icon"></i>
        </div>
        <div class="title">
            <p>Memory Scan</p>
        </div>
        <div class="size-disk">
            <p><?php echo $space[0]; ?></p>
            <p>=> D:/</p>
			<p><?php echo $space[1];?></p>
            <p>=> C:/</p>
        </div>
        <div class="loading"></div>
    </div>


    </div>
	   <script src = "script.js"></script>


</body>
</html>
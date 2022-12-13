<?php
    session_start();
    if(isset($_POST['submit'])){
        $input = $_POST['input'];
        $text = $_SESSION['text'];
		$text = str_replace(' ', '', $text);
            if($input == $text){
				echo 'success';
            }else{
				header('location:index.php');
            }
    };

?>
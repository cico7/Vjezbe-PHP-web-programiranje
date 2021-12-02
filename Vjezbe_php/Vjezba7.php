<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>7 zadatak</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content=" Rjesenje sedmog zadatka">
		<meta name="keywords" content="kolokvij, prvi, drugi, ocjena">
		<meta name="author" content="Damir Eri">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">>

        <style>
            body{
                margin:auto;
                 width:1024px;
                padding:10px;
                background-color:#ebebeb;
                font-size:14px;
                font-family:Verdana;
            }
            input[type="number"]{
                display: block;
                width: 5%;
                padding: 8px;
                border: 3px solid black;
                border-bottom: 3px solid black;
                background: transparent;
                margin-bottom: 15px;
                font: 16px Arial, Helvetica, sans-serif;
                height: 17px;
            }
            label {
                width: 150px;
                display:inline-block;    
            }
            .one{
                margin: 30px 0;
            }
            input[type="submit"] {
                
                position: relative;
                padding: 0.75em 2em;
                font: 1rem "Orbitron"; 
                letter-spacing: 2px;
                text-transform: uppercase;
                color: green;
                text-shadow: 0 5px 10px rgba(192, 36, 0, 0.4), 0 2px 2px rgba(192, 36, 0, 0.4);
                background-image: radial-gradient(
                100% 75% at 50% 100%,
                #fed262 0%,
                #c40900 10%
            }
        </style>
	</head>
        <h1>Prosjek i konačna ocjena iz predmeta</h1>
        <form action="" method="post">
		<div class="one">
            <label for="a">Ocjena prvog kolokvija *: </label>
            <input type="number" id="a" name="a" min="1" max="5" required>
            <br>
        </div>
        <div class="one">
            <label for="b">Ocjena drugog kolokvija *: </label>
            <input type="number" id="b" name="b" min="1" max="5" required>
            <br>
        </div>
        <div class="one">
            <input type="submit" value="POŠALJI">
        </div>
        </form>



       <?php
          $a=$_POST['a'];
          $b=$_POST['b'];
          if ($a==1 || $b==1){
              print'<p>Konačna ocjena je negativan </p>';
          }
          else{
            $c=($a+$b)/2;
			print'<p> Prosjek je: '.$c.'</p>';
          }
        
        ?>     
    
</body>
</html>
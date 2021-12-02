<!DOCTYPE HTML>
<html>
	<head>
        <title>11 zadatak</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content=" Rjesenje">
		<meta name="keywords" content="prosti, broj, prirodni">
		<meta name="author" content="Damir Eri">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	
	</head>
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
	<body>
	<?php
		if(!isset($_POST['_action_']))   
        {
            $_POST['_action_'] = FALSE;
        }
		if ($_POST['_action_']  == FALSE)
        {
		print '
				<form action="" method="post" >
				<input type="hidden" id="_action_" name="_action_" value="TRUE"><br>
				<label for="a">Upišite broj:</label>
				<input type="number" id="a" name="a" required><br>
				<input type="submit" value="Pošalji"> 
			</form>';
		}
		else if ($_POST['_action_']  == TRUE)
        {
			function prostiBroj($a) {
				if
                    ( 
                    $a == 2 || $a == 3 || $a == 5 || $a == 7 || $a == 11 || $a == 13 || $a == 19 || $a == 23 || $a == 29 || $a == 31 || $a == 37 || $a == 41 ||
                    $a == 43 ||$a == 47 || $a == 53 || $a == 59 || $a == 61 || $a == 67 || $a == 71 || $a == 73 || $a == 79 || $a == 83 || $a == 89 || $a == 97
                    )
                    {
					return  "$a " . "JE PROSTI BROJ.". "</br>";
					} 
				else
                {
					return "$a " . "NIJE PROSTI BROJ.". "</br>";
				}

			} 
			echo prostiBroj($_POST['a']);
			print "Prosti brojevi su: 2, 3, 5, 7, 11, 13, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97";
			print '<p><a href="http://localhost/Vjezbe-PHP-web-programiranje-main/Vjezbe_php/Vjezba11.php">POVRATAK</a></p>'; 
			
		}
    ?>
	</body>
</html>
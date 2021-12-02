<!DOCTYPE HTML>
<html>
	<head>
	    <title>8 zadatak</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content=" Rjesenje osmi zadatak">
		<meta name="keywords" content="Vozilo, Audi, BMW">
		<meta name="author" content="Damir Eri">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">>
        <style>
            body{
                font-family:Arial;
    			font-size:15px;
    			text-align:left;
				width:1024px;
    			padding:50px;
    			background-color:#ebebeb;
    			letter-spacing:2px; 
				}
            li 
				{
				list-style-type: none;
				}
            input[type="submit"] 
				{
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
                #c40900 10%;
				}
        </style>
	</head>
	<body>
		<?php
			echo "<p>Označi vozilo:</p>"; 
			$cars = array("BMW", "Mercedes", "Hyundai", "Renault", "Audi", "Citroen"); 
			echo "<form method='POST' action='' id='cars'>
			<ul>";
			foreach ($cars as $car) 
				{ 
		   			echo '<li><input type="radio" name="car" value="' .$car . '" required> ' . $car . '</li>'; 
				} 
		
			echo "
			</ul>
			<p><input type='submit' value='POŠALJI'></p>
			</form>"; 
			if(isset($_POST['car'])) 
	  			{
					echo $_POST['car']; 
				}
		?>
	</body>
</html>



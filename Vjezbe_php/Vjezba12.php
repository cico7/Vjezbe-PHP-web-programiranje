<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
if ($_POST['user'] != "") {
    include "cookie.php";
}
?>
<!DOCTYPE html>
<html lang="hr">

<head>
    <title>12 zadatak</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content=" Rjesenje dvanaestog zadatka">
    <meta name="keywords" content="Prijava, korisnik, cookie">
    <meta name="author" content="Damir Eri">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>
<style>
    body {
        margin: 10px;
    }
</style>

<body>
    <div class="container">
        <h1>PRIJAVA KORINIKA { cookie }</h1>
        <?php
        if ($_COOKIE['user'] == "" && empty($_COOKIE['user'])) {
            print '
			 <form action="index.php" method="POST" name="signin">
				
				<div class="form-check">
					<label for="user">KORISNIK:*</label>
					<input style= "width: 250px; background-color: blue; type="text" id="user" name="user" class="form-control">
				</div>
                <br>
				<div class="form-check">
					<label for="pass">LOZINKA: *</label>
					<input style= "width: 250px; background-color: blue; type="password" id="pass" name="pass" class="form-control">
				</div>
                <br>
                <br>
				<input style= "width: 100px; background-color: red; transition-duration: 0.4s; color: black; border: 2px solid #4CAF50;" type="submit" value="Pošalji" class="btn btn-primary">
			 </form>';
        } else {

            if (isset($_COOKIE['user']) && !empty($_COOKIE['user'])) {
                echo "<p><b>Dobrodošao:</b> " . $_COOKIE['user'] . "</p>";
                echo '<p><a href="signout.php">Odjavi se</a></p>';
            }
        }

        ?>
    </div>
</body>

</html>
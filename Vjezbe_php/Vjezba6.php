<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>6 zadatak</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content=" Rjesenje sestog zadatka">
    <meta name="keywords" content="kalkulator, ">
    <meta name="author" content="Damir Eri">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>

<body style="margin: 50px;" >
    
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = '';
    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                $result = $num1 / $num2;
        }
    }
    print '
        <h1 style="margin-bottom:10px;font-size:40px;">KALKULATOR</h1>
        <form action="" method="post" id="calculator">
		<label for="fname" style= "color:green; font-size:30px;" >Upišite broj</label>
        <input style= "color:red; font-size:30px;" class="placeholder col-6" type="number" name="num1" id="" required="required" value="' . $num1 . '">
        <br>
        <label style= "color:green; font-size:30px;" for="fname" style= "color:red; font-size:40px;" >Upišite broj</label>
        <input style= "color:red; font-size:30px;" type="number" name="num2" id="" required="required" value="' . $num2 . '"> 
        <br>
        <br>
        Rezultat: ' . $result . '         
        <br>
        <br>
        <input style="margin-bottom:10px;font-size:40px;" type="submit" name="operator" value="+" class="">
        <input style="margin-bottom:10px;font-size:40px;" type="submit" name="operator" value="-" class="">
        <input style="margin-bottom:10px;font-size:40px;" type="submit" name="operator" value="*" class="">
        <input style="margin-bottom:10px;font-size:40px;" type="submit" name="operator" value="/" class="">
        </form>';
    ?>
</body>

</html>
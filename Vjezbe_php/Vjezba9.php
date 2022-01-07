<!DOCTYPE HTML>
<html>
	<head>
        <title>9 zadatak</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content=" Rjesenje devetog zadatka">
        <meta name="keywords" content="trgovina, radno vrijeme, subota, nedjelja">
        <meta name="author" content="Damir Eri">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	</head>
    <body>
<?php

/*$date = '2016-11-16 05:35:14';
set locale(LC_TIME, array('nb_NO.UTF-8','nb_NO@norw','nb_NO','croatian'));
echostrftime("%e %b %Y",strtotime($date));
*/
$today = strtotime(date("l, H:i:s"));
print "TRENUTNI DAN I VRIJEME: " . date("l, H:i:s");
print "<br>";

function radnoV($currentDate)
    {
        if (date('N', $currentDate) <= 5 && date('H', $currentDate) >= 8 && date('H', $currentDate) <= 20)
        {
            $result = "OTVORENO OD 08 DO 20.";
        }
        else if (date('N', $currentDate) == 6 && date('H', $currentDate) >= 8 && date('H', $currentDate) <= 15)
        {
            $result = "OTVORENO OD 08 DO 15.";
        }
        else if (date('N', $currentDate) == 7)
        {
            $result = "NEDJELJOM ZATVORENO.";
        }
        else
        {
            $result = "ZATVORENO";
        }
        return $result;
    }
    print radnoV($today);
    ?>
</body>
</html>
<?php 
	# Stop Hacking attempt
	define('_APP_', TRUE);
	
	# Start session
	session_start();
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($POST['_action']))  { $POST['_action'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
print '
<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
				
        <meta name="author" content="damir@net.hr">
		<!-- favicon meta -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<!-- end favicon meta -->
		<!-- end meta elements -->
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<!-- End Google Fonts -->
		<title>Example page - HTML5</title>
	</head>
<body>
	<header>
		<div'; if ($menu > 1) { print ' class="hero-subimage"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>';
			include("menu.php");
		print '</nav>
	</header>
	<main' . (isset($_SESSION['news_title_1']) || isset($_SESSION['news_title_2']) || isset($_SESSION['news_title_3']) ? ' class="session"' : '') .'>';
		
	
	# Homepage
	if (!isset($menu) || $menu == 1) { include("home.php"); }
	
	# News
	else if ($menu == 2) { include("news.php"); }
	
	# Contact
	else if ($menu == 3) { include("contact.php"); }
	
	# About us
	else if ($menu == 4) { include("about-us.php"); }
	
	
	print '
	</main>';
	if (!empty($_SESSION['news_title_1']) || !empty($_SESSION['news_title_2']) || !empty($_SESSION['news_title_3'])) {
		print '
		<aside><h2 style="text-align:center">Pogledali ste</h2>';
		# ispis vrijednosti $_SESSION
		print '
		<ul>';
		if (isset($_SESSION['news_title_1'])) {
			print '<li style="border-bottom:2px dotted white;width:100%;"><a href="'. $_SESSION['news_1'].'" style="text-align:left;">'. $_SESSION['news_title_1'].'</a></li>';
		}
		if (isset($_SESSION['news_title_2'])) {
			print '<li style="border-bottom:2px dotted white;width:100%;"><a href="'. $_SESSION['news_2'].'" style="text-align:left;">'. $_SESSION['news_title_2'].'</a></li>';
		}
		if (isset($_SESSION['news_title_3'])) {
			print '<li style="border-bottom:2px dotted white;width:100%;"><a href="'. $_SESSION['news_3'].'" style="text-align:left;">'. $_SESSION['news_title_3'].'</a></li>';
		}
		print '
		</ul>
		<p><a href="brisanje_sessije.php">Obriši sesiju</a></p>
		</aside>';
	}
	print '
	<footer>
		<p>Copyright &copy; ' . date("Y") . ' Damir Eri</p>
	</footer>
</body>
</html>';
?>
<?php
session_start();
require_once('functions.php');
define('MAIN_PAGE', true);
ini_set('display_errors', 0);
if(isset($_POST["username"])){
	$_SESSION['username'] = $_POST["username"];	
}
?>


  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Cipri's RealMadrid fan site</title>
  <meta name="description" content="Fan site pentru Real Madrid">
  <meta name="author" content="Ciprian Turcut">
  <link rel="shortcut icon" href="images/favicon.ico">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/main.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.redirect.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/quiz.js"></script>

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
	<header id="main-header">
		<div class="row">
		  <div class="twelve colums">
			<h1>Cipri's <span class="real-madrid">RealMadrid</span> Fan Site</h1>
		  </div>
		</div>
	</header>

	<nav id="main-navigation" role="navigation">
		<?php menu_page("Acasa", "index.php"); ?>
		<?php menu_page("Pagina oficiala", "http://www.realmadrid.com/en"); ?>
		<?php menu_page("Nasterea viitoarei legende", "index.php?page=nasterea-legendei"); ?>
		<?php menu_page("Prima jumatate de secol", "index.php?page=prima-jumatate-de-secol"); ?>
		<?php menu_page("Anii 1950-2000", "index.php?page=anii-1950-2000"); ?>
		<?php menu_page("Secolul XXI", "index.php?page=secolul-21"); ?>
		<?php menu_page("Magazin suporteri", "index.php?page=shop"); ?>
		<?php menu_page("Quiz", "index.php?page=quiz"); ?>
		<?php menu_page("Formular", "index.php?page=formular"); ?>
		<?php menu_page("Autentificare", "index.php?page=login"); ?>
	</nav>

  <main id="content">
  <div class="row">
<?php
switch (@$_GET['page']) {
case "nasterea-legendei":
	include($_GET['page'] . '.php');
	break;
case "prima-jumatate-de-secol":
	include($_GET['page'] . '.php');
	break;
case "anii-1950-2000":
	include($_GET['page'] . '.php');
	break;
case "secolul-21":
	include($_GET['page'] . '.php');
	break;
case "quiz":
	include($_GET['page'] . '.php');
	break;
case "formular":
	include($_GET['page'] . '.php');
	break;
case "shop":
	include($_GET['page'] . '.php');
	break;
case "checkout":
	include($_GET['page'] . '.php');
	break;
case "login":
	include($_GET['page'] . '.php');
	break;

case "home":
default:
	include('home.php');
	break;
}
?>
  </div>
  </main>

  <div>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>

<!DOCTYPE html>
<html lang=en-ca>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pitt Meadows Plumbing</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link href="css/headerstyle.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/projects.css">
	<?php if($page == "c.team.php" 
	|| $page == "c.team_bio1.php" 
	|| $page == "c.team_bio2.php" 
	|| $page == "c.team_bio3.php" 
	|| $page == "c.team_bio4.php" 
	|| $page == "c.team_bio5.php" 
	|| $page == "c.team_bio6.php" 
	|| $page == "c.team_bio7.php" 
	|| $page == "c.team_bio8.php" 
	|| $page == "c.team_bio9.php" 
	|| $page == "c.team_bio10.php" 
	|| $page == "c.team_bio11.php" 
	|| $page == "c.team_bio12.php" 
	|| $page == "c.team_bio13.php" 
	|| $page == "c.team_bio14.php" 
	|| $page == "c.team_bio15.php" 
	|| $page == "c.team_bio16.php" 
	|| $page == "c.team_bio17.php" 
	|| $page == "c.team_bio18.php" 
	|| $page == "c.team_bio19.php"  
	|| $page == "c.projects.php" 
	|| $page == "c.commercial_residential.php"
	|| $page == "c.educational_institutional.php"
	|| $page == "c.industrial_warehouse.php"
	|| $page == "c.institutional.php"
	|| $page == "c.medical_institutional.php"
	|| $page == "c.office_commercial_govt.php"
	|| $page == "c.recreational.php"
	|| $page == "c.residential.php"
	|| $page == "c.tenant_improvements.php"
	|| $page == "c.comm_res003.php"
	){ ?>
	<link rel="stylesheet" type="text/css" href="css/team.css">
	<?php } else{ ?>
	<?php } ?>
	
	<meta name="handheldfriendly" content="true">
	<meta name="mobileoptimized" content="240">
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui-2.css"/>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/modernizr.js"></script>
	<?php if($page == "c.main.php" ){ ?>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.swipe.js"></script>
	<script type="text/javascript" src="js/ios6fix.js"></script>
	<?php } else{ ?>
	<?php } ?>
</head>


<body id="top">

	<?php if($page == "c.main.php" ){ ?>
	<header class="masthead clearfix homepage" id="header">
		<div class="masthead-top masthead-big">
			<h1 class="logo-wrapper">
			<a href="home" class="logo">Pitt Meadows Plumbing</a>
			<a href="home" class="logo_big">Pitt Meadows Plumbing</a>
			</h1>
	<?php } else{ ?>
	<header class="masthead clearfix">
		<div class="masthead-top">
			<h1 class="logo-wrapper">
			<a href="home" class="logo">Pitt Meadows Plumbing</a>
			</h1>
	<?php } ?>
			<div class="topmenu-link">
			<a href="careers">Careers</a><a href="partner">Partner</a>
			</div><!-- end of .topmenu-link -->
			
			<a href="#nav" class="nav-btn" data-state="inactive">Navigate</a>
		</div><!-- end of .masthead-top -->
		
		<?php include 'i.menu.php'; ?>
		
	</header><!-- // End of header -->
		

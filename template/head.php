<?php require_once 'config/config.php';  ?>
<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
	<meta charset="utf-8"/>
	<title><?php echo $title; ?></title>
	<link rel="icon" href="assets/images/favicon.png" /> 
	<meta name="theme-color" content="#2b2f40" />
	<meta name="keywords" content="HTML5, CSS3, frontend, agni">
	<meta name="description" content=" Description ">
	<meta name="author" content="Eforce">
	<meta name="robots" content="index,follow">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<!-- CSS -->
    <link rel="stylesheet" href="<?php echo url('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>" >
    <link rel="stylesheet" href="<?php echo url('assets/css/font.css'); ?>">
    <link rel="stylesheet" href="<?php echo url('assets/css/load.css'); ?>">
    <link rel="stylesheet" href="<?php echo url('assets/css/style.css'); ?>">
 	<!-- Owl -->
    <link rel="stylesheet" href="<?php echo url('node_modules/owl.carousel/dist/assets/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo url('node_modules/owl.carousel/dist/assets/owl.theme.default.min.css'); ?>">

    <!-- JS -->
	<script src="<?php echo url('node_modules/jquery/dist/jquery.min.js'); ?>"></script>
	<script src="<?php echo url('node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo url('node_modules/owl.carousel/dist/owl.carousel.min.js'); ?>"></script>	
	<script src="<?php echo url('assets/js/default.js'); ?>"></script>

</head>
<body class="<?php echo $page; ?>" >
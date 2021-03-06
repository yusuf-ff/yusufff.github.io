<?php require 'admin/include/database.php';

if ($ayar->site_durum == 0) {
	die("site şu anda kapalı");
}


?>

<html>
	<head>
		<title><?= $ayar->site_baslik ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<meta name="descripton" content="<?= $ayar->site_descripton ?>">
		<meta name="keywords" content="<?= $ayar->site_keywords ?>">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="assets/upload/<?= $ayar->site_resim ?>" alt="" /></span>
							<h1 id="title"><?= $ayar->site_adSoyad ?></h1>
							<p><?= $ayar->site_meslek ?></p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--

								Prologue's nav expects links in one of two formats:

								1. Hash link (scrolls to a different section within the page)

								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

							-->
							<ul>
<li><a href="index.php#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Anasayfa</span></a></li>
<li><a href="index.php#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Çalışmalarım</span></a></li>
<li><a href="index.php#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Hakkımda</span></a></li>
<li><a href="index.php#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">İletişim</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
			<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
			<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="https://github.com/yusuf-ff" class="icon fa-github"><span class="label">Github</span></a></li>
			<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
			<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
		    <li><a href="#" class="icon fa-male"><span class="label">Instagram</span></a></li>
			<li><a href="#" class="icon fa-file-word-o"><span class="label">Instagram</span></a></li>
			<li><a href="#" class="icon fa-desktop"><span class="label">Instagram</span></a></li>
			<li><a href="#" class="icon fa-database"><span class="label">Instagram</span></a></li>
			<li><a href="#" class="icon fa-coffee"><span class="label">Instagram</span></a></li>
			<li><a href="#" class="icon fa-archive"><span class="label">Instagram</span></a></li>
			<li><a href="#" class="icon fa-youtube"><span class="label">Instagram</span></a></li>
			<li><a href="#" class="iccon fa-home"><span class="label">Y</span></a></li>
			<li><a href="#" class="icon fa-file-word-o"><span class="label">Instagram</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

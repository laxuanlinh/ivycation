<?php
	require_once ("/utils/header.php");
	$header = new Header();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ivycation</title>
		<link rel="stylesheet" type="text/css" href="<?= $header->absolute_path; ?>/style.css">
		<link rel="stylesheet" type="text/css" href="<?= $header->absolute_path; ?>/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?= $header->absolute_path; ?>/css/bootstrap-select.css">
		<link rel="stylesheet" type="text/css" href="<?= $header->absolute_path; ?>/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="<?= $header->absolute_path; ?>/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?= $header->absolute_path; ?>/css/simple-line.css">
		<link rel="stylesheet" type="text/css" href="<?= $header->absolute_path; ?>/css/template.css">
		<script src="<?= $header->absolute_path; ?>/js/jquery.js"></script>
		<script src="<?= $header->absolute_path; ?>/js/bootstrap.js"></script>
		<script src="<?= $header->absolute_path; ?>/js/bootstrap-select.js"></script>
		<script src="<?= $header->absolute_path; ?>/js/parallax.js"></script>
		<script src="<?= $header->absolute_path; ?>/js/hf2017.js"></script>
	</head>
	<body>
		<body class="hf-inpage">
			<header id="header" class="hf-header">
				<div class="container">
					<!-- S: header-logo -->
					<a href="/ivy/./" id="logo" class="hf-logo" title="Ivycation - Đơn vị luyện thi SAT số 1 toàn quốc" rel="nofollow">
						<span>Ivycation - Đơn vị luyện thi SAT số 1 toàn quốc</span>
					</a>
					<!-- E: header-logo -->
					<div class="groupmenu">
						<!-- S: header-membertools -->
						<div class="hf-membertools">
						</div>
						<!-- E: header-membertools -->
						<!-- S: header-mainmenu -->
						<div class="hf-mainmenu">
							<ul class="nav menu">
								<!-- some kind of placeholder? -->
								<li class="deeper parent">
									<a href="<?= get_site_url() ?>">Home</a>
								</li>

								<!-- output top menu -->
								<?php $header->get_menu() ?>

							</ul>
							<ul class="nav menu_topmenu">
								<li class="item-118 divider">
									<span class="separator icon-location">HN</span>
								</li>
								<li class="item-119 divider">
									<span class="separator icon-mobile">0942 897 897</span>
								</li>
								<li class="item-120">
									<a href="mailto:info@ivycation.edu.vn" class="icon-email">info@ivycation.edu.vn</a>
								</li>
								<li class="item-156">
									<a href="https://www.facebook.com/ivycation" class="icon-facebook">facebook hn</a>
								</li>
								<li class="item-152 divider">
									<span class="separator icon-location last">TP.HCM</span>
								</li>
								<li class="item-153 divider">
									<span class="separator icon-mobile">0961 568 569</span>
								</li>
								<li class="item-154">
									<a href="mailto:info.hcm@ivycation.us" class="icon-email">info.hcm@ivycation.us</a>
								</li>
								<li class="item-155">
									<a href="https://www.facebook.com/ivycation" class="icon-facebook">facebook tphcm</a>
								</li>
							</ul>
						</div>
						<!-- E: header-mainmenu -->
						<!-- S: header-mainmenu-onmobile -->
						<a id="mainmenuonmobile">
							<i class="icon-menu icons"></i>
						</a>
						<!-- E: header-mainmenu-onmobile -->
					</div>
					<!-- E: header-mainmenu -->
				</div>
				<!-- E: header -->
			</header>
			<!-- S: slider -->
			<!-- E: slider -->
			<!-- S: mainbody -->
			<!-- E: mainbody -->
			<!-- S: footer -->
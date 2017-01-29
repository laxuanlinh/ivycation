<?php
	require_once ("/utils/header.php");
	$header = new Header();
?>
<!DOCTYPE html>
<html lang="vn" prefix="og: http://ogp.me/ns#">
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
	<body class="hf-frontpage" >
		
		<!-- S: message -->
		<!-- E: message -->
		<!-- S: top header -->
		<div id="topheader">
			<div class="container">
				<div class="row">
					<div class="col-xs-8">
						<ul class="nav menu_topmenu">
							<li class="item-118 divider"><span class="separator icon-location">HN</span>
							</li><li class="item-119 divider"><span class="separator icon-mobile">0942 897 897</span>
							</li><li class="item-120"><a href="mailto:info@ivycation.edu.vn" class="icon-email">info@ivycation.edu.vn</a></li><li class="item-156"><a href="https://www.facebook.com/ivycation" class="icon-facebook">facebook hn</a></li><li class="item-152 divider"><span class="separator icon-location last">TP.HCM</span>
							</li><li class="item-153 divider"><span class="separator icon-mobile">0961 568 569</span>
							</li><li class="item-154"><a href="mailto:info.hcm@ivycation.us" class="icon-email">info.hcm@ivycation.us</a></li><li class="item-155"><a href="https://www.facebook.com/ivycation" class="icon-facebook">facebook tphcm</a></li></ul>
						</div>
						<div class="col-xs-4">
							<div class="language_switcher">
								<div class="mod-languages">
									<ul class="lang-inline">
										<?php qtranxf_generateLanguageSelectCode($type,$id) ?>
									</ul>
								</div>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
			<!-- E: top header -->
			<!-- S: header -->
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
								<li class="item-101 default current active">
									<a href="/ivy/vn/" >Home</a>
								</li>
								<?php $header->get_menu() ?>
							</ul>
							<ul class="nav menu_topmenu">
								<li class="item-118 divider"><span class="separator icon-location">HN</span>
								</li><li class="item-119 divider"><span class="separator icon-mobile">0942 897 897</span>
								</li><li class="item-120"><a href="mailto:info@ivycation.edu.vn" class="icon-email">info@ivycation.edu.vn</a></li><li class="item-156"><a href="https://www.facebook.com/ivycation" class="icon-facebook">facebook hn</a></li><li class="item-152 divider"><span class="separator icon-location last">TP.HCM</span>
								</li><li class="item-153 divider"><span class="separator icon-mobile">0961 568 569</span>
								</li><li class="item-154"><a href="mailto:info.hcm@ivycation.us" class="icon-email">info.hcm@ivycation.us</a></li><li class="item-155"><a href="https://www.facebook.com/ivycation" class="icon-facebook">facebook tphcm</a></li></ul>
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
				</header>
				<!-- E: header -->
				<!-- S: slider -->
				<div id="hf-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#hf-slider" data-slide-to="0" class="active"></li>
						
						<li data-target="#hf-slider" data-slide-to="1"></li>
						
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						
						<div class="item active"  style="background-image: url('<?= $header->absolute_path; ?>/images/bg1.jpg')">
							<div class="container">
								<group class="slidecontent">
									<h3>Lựa chọn kỳ thi phù hợp nhất</h3>
									<h2>SAT OR ACT</h2>
									<a class="btn btn-red btn-lg" href="#">Xem thêm</a> <img title="ivycation lựa chọn kỳ thi phù hợp nhất SAT OR ACT" src="<?= $header->absolute_path; ?>/images/fly.png" alt="ivycation Lựa chọn kỳ thi phù hợp nhất SAT OR ACT" />
								</group>
							</div>
						</div>
						
						<div class="item  _sl2"  style="background-image: url('<?= $header->absolute_path; ?>/images/bg2.jpg')">
							<div class="container">
								<group class="slidecontent">
									<h3>Merry Christmas</h3>
									<h2>HAPPY NEW YEAR</h2>
									<img class="city" title="ivycation lựa chọn kỳ thi phù hợp nhất SAT OR ACT" src="<?= $header->absolute_path; ?>/images/city.png" alt="ivycation Lựa chọn kỳ thi phù hợp nhất SAT OR ACT" />
								</group>
							</div>
						</div>
					</div>
					<!-- Controls -->
					<a class="left slider-control" href="#hf-slider" role="button" data-slide="prev">
						<i class="icon-arrow-left icons"></i>
					</a>
					<a class="right slider-control" href="#hf-slider" role="button" data-slide="next">
						<i class="icon-arrow-right icons"></i>
					</a>
				</div>
				<!-- E: slider -->
				<!-- S: mainbody -->
				<section id="mainbodywrapper">
					<!-- S: mainbody-courses -->
					<div id="courses" class="hf-courses">
						<div class="container">
							
							<div class="box box-homepage  courses_home">
								<h2 class="box-title">
								<a href="/ivy/vn/" title="C&aacute;c kho&aacute; học">
									Các khoá học
								</a>
								<a class="left slider-control slider-item" href="#carousel-courses" role="button" data-slide="prev">
									<i class="icon-arrow-left icons"></i>
								</a>
								<a class="right slider-control slider-item" href="#carousel-courses" role="button" data-slide="next">
									<i class="icon-arrow-right icons"></i>
								</a>
								</h2>
								<div class="box-content">
									<div id="carousel-courses" class="carousel slide" data-ride="carousel">
										<!-- Wrapper for slides -->
										<div class="carousel-inner" role="listbox">
											<?php 
												$category = get_category_by_slug("khoa-hoc");
												$firstCategory = $category->term_id;
												$latestpost = new WP_Query('posts_per_page=4&cat='.$firstCategory);
											?>
											<div class="item active">
												<ul class="col4">
													<?php while($latestpost->have_posts()):$latestpost->the_post();?>
														<li>
															<div class="item-courses-wrap item-border">
																<div class="item-courses-info">
																	<a class="item-image" href="<?= the_permalink() ?>" title="<?= get_the_title() ?>" style="background: url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center #fff;background-size:cover;">
																	</a>
																	<a class="item-title" href="<?= the_permalink() ?>" title="<?= get_the_title() ?>">
																		<?= get_the_title() ?>
																	</a>
																</div>
																<div class="item-courses-extra">
																	<ul>
																		<li class="item-category">
																			<?php $cat = get_the_category(get_the_ID())?>
																			<a href="<?= get_category_link( $cat[0]->cat_ID ); ?>">
																				<?php echo $cat[0]->name ?>
																			</a>
																		</li>
																		<li class="item-hits">141</li>
																	</ul>
																</div>
															</div>
														</li>
													<?php endwhile ?>
													<?php wp_reset_query();?>						
												</ul>
											</div>
											<?php 
												$latestpost = new WP_Query('offset=3&posts_per_page=4&cat='.$firstCategory);
											?>
											<div class="item">
												<ul class="col4">
													<?php while($latestpost->have_posts()):$latestpost->the_post();?>
														<li>
															<div class="item-courses-wrap item-border">
																<div class="item-courses-info">
																	<a class="item-image" href="<?= the_permalink() ?>" title="<?= get_the_title() ?>" style="background: url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center #fff;background-size:cover;">
																	</a>
																	<a class="item-title" href="<?= the_permalink() ?>" title="<?= get_the_title() ?>">
																		<?= get_the_title() ?>
																	</a>
																</div>
																<div class="item-courses-extra">
																	<ul>
																		<li class="item-category">
																			<?php $cat = get_the_category(get_the_ID())?>
																			<a href="<?= get_category_link( $cat[0]->cat_ID ); ?>">
																				<?php echo $cat[0]->name ?>
																			</a>
																		</li>
																		<li class="item-hits">141</li>
																	</ul>
																</div>
															</div>
														</li>
													<?php endwhile ?>
													<?php wp_reset_query();?>						
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- E: mainbody-courses -->
					<!-- S: mainbody-aboutus -->
					<div id="aboutus" class="hf-aboutus">
						<div class="container">
							<div class="row">
								<div class="col-sm-6 col-xs-12">
									<div class="box box-homepage">
										
										<div class="custom"  >
											<h2 class="box-title">Giới thiệu</h2>
											<div class="box-content-desc"><?php the_content()?></div>
											<a href="gioi-thieu" class="btn btn-white">Xem thêm</a></div>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12">
										<div class="group-tree">
											<div class="book" style="background: url(<?=$header->absolute_path?>/images/book.png)"></div>
											<div class="tree tree1" style="background: url(<?=$header->absolute_path?>/images/tree1.png)"></div>
											<div class="tree tree2" style="background: url(<?=$header->absolute_path?>/images/tree2.png)"></div>
											<div class="tree tree3" style="background: url(<?=$header->absolute_path?>/images/tree3.png)"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- E: mainbody-aboutus -->
						<!-- S: mainbody-customersay -->
						
						<div id="customersay" class="hf-customersay">
							<div class="container">
								<div class="box box-homepage">
									<h2 class="box-title">
									<a>Thành tích & chia sẻ</a>
									<a class="left slider-control slider-item" href="#carousel-customersay" role="button" data-slide="prev">
										<i class="icon-arrow-left icons"></i>
									</a>
									<a class="right slider-control slider-item" href="#carousel-customersay" role="button" data-slide="next">
										<i class="icon-arrow-right icons"></i>
									</a>
									</h2>
									<div class="box-content">
										<div id="carousel-customersay" class="carousel slide" data-ride="carousel">
											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
												<div class="item ">
													<div class="customersay-detail-wrapper">
														<div class="customersay-detail-image" >
														</div>
														<div class="customersay-detail-info">
														</div>
													</div>
												</div>
												
												<?php
													$catChiase = get_category_by_slug("chia-se");
													$firstCategory = $catChiase->term_id;
													$catThanhtich = get_category_by_slug("thanh_tich");
													$secondCategory = $catThanhtich->term_id;
													$latestpost = new WP_Query('posts_per_page=4&cat='.$firstCategory.'&cat='.$secondCategory);
												?>
												<?php $index = 0 ?>
												<?php while($latestpost->have_posts()):$latestpost->the_post();?>
												<div class="item <?=$index==0?"active":"" ?>">
													<div class="customersay-detail-wrapper">
														<div class="customersay-detail-image" style="background: url(<?=get_the_post_thumbnail_url()?>) no-repeat center center #fff;background-size:cover;">
														</div>
														<div class="customersay-detail-info">
															<h2><a href="<?php the_permalink()?>" title="<?php the_title()?>"><?php the_title()?></a></h2>
															<span class="statics">&nbsp;&nbsp;&nbsp;&nbsp;</span>
															<p class="content"><?php the_excerpt()?></p>
														</div>
													</div>
												</div>
												<?php $index++ ?>
												<?php endwhile ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- E: mainbody-customersay -->
						<!-- S: mainbody-services -->
						<div id="news" class="hf-news">
							<div class="container">
								
								<div class="box box-homepage ">
									<h2 class="box-title">
									<a href="/ivy/vn/su-kien-noi-bat" title="Tin tức &amp; Sự kiện">
										Tin tức & Sự kiện
									</a>
									</h2>
									<p class="box-descr">Education news all over the world.</p>
									<?php
										$catTintuc = get_category_by_slug("tin-tuc-su-kien");
										$cat_ID = $catTintuc->term_id;
										$latestpost = new WP_Query("cat=".$cat_ID);
										$count = 0;

									?>
									<div class="box-content">
										<div class="row">
											<?php while($latestpost->have_posts()):$latestpost->the_post();?>
											<?php if($count<2):?>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<div class="news news-big">
													<div class="news-wrapper">
														<a class="news-image" href="<?php the_permalink() ?>" title="<?php the_title()?>" style="background: url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center #fff;background-size:cover;">
														</a>
														<div class="news-info">
															<span class="news-time"><?php echo get_the_date()?></span>
															<a class="news-title" href="<?php the_permalink() ?>" title="<?php the_title()?>">
															<?php the_title()?>							
															</a>
														</div>
													</div>
												</div>
											</div>
											<?php 
												endif;
												$count++;
											?>
											<?php endwhile ?>
											<div class="col-md-4 col-xs-12">
											<?php $count = 0 ?>
											<?php while($latestpost->have_posts()):$latestpost->the_post();?>
												<?php if(1<$count && $count < 4):?>
												<div class="news news-small <?= $count==3 ? 'last':'' ?>">
													<div class="news-wrapper ">
														<a class="news-image" href="<?php the_permalink() ?>" title="<?php the_title()?>" style="background: url(<?php get_the_post_thumbnail_url()?>) no-repeat center center #fff;background-size:cover;">
														</a>
														<div class="news-info">
															<span class="news-time"><?= get_the_date() ?></span>
															<a class="news-title" href="<?php the_permalink() ?>" title="<?php the_title()?>">
															<?php the_title()?>
															</a>
															<p class="news-intro">
																<?php 
																	$str = get_the_excerpt();
																	if (strlen($str) > 50)
   																	$str = substr($str, 0, 50) . '...';
   																	echo $str;
																?>

															</p>
														</div>
													</div>
												</div>
												<?php endif ?>
												<?php $count++ ?>
											<?php endwhile ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- E: mainbody-services -->
						<!-- S: mainbody-customersay -->
						<div id="faqcontact" class="hf-faqcontact">
							<div class="container">
								
								<div class="custom"  >
									<h3><strong>How to Enroll</strong> Your Child to a Class?</h3>
									<a class="btn btn-red btn-lg">FAQ</a></div>
								</div>
							</div>
							
							<!-- E: mainbody-customersay -->
							<!-- S: mainbody-top -->
							<!-- E: mainbody-top -->
							<!-- S: mainbody-component -->
							<section id="component">
								
							</section>
							<!-- E: mainbody-component -->
							<!-- S: mainbody-bottom -->
							
							<!-- E: mainbody-bottom -->
							<!-- S: mainbody-footer -->
							
							<!-- E: mainbody-footer -->
						</section>
						<!-- E: mainbody -->
						<!-- S: footer -->
						<footer id="footer" class="hf-footer">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-xs-12">
										<div class="logofooter">
											<p>The school also focuses on personality development for students in a comprehensive manner, especially compassion</p>
											<p>
												<strong>Hà Nội</strong><br>
												Tầng 6, Tòa nhà Agribank 180 Trần Duy Hưng, Hà Nội.<br>
												Hotline: 098 164 6789<br>
												Tầng 2: L2-04, tòa  T3 Times City, 458 Minh Khai, Hà Nội.<br>
												Hotline: 0942 897 897
											</p>
											<p>
												<strong>TP Hồ Chí Minh</strong><br>
												Địa chỉ: Lâu 1, 62A Phạm Ngọc Thạch, Phường 6, Quận 3 - Hotline: 0961 568 569<br>
												Tel: (84.4) 0961 568 569– (84) 0961 568 569<br>
												Email: info@ivycation.edu.vn
											</p>
										</div>
									</div>
									<div class="col-md-6 col-xs-12" style="display: none;">
										<div class="menufooter">
											<div class="moduletable">
												<h3>Ivycation</h3>
												<ul class="nav menumenu-footer">
													<li class="item-125"><a href="#" class="footer-aboutus"> Giới thiệu</a></li><li class="item-126"><a href="#" class="footer-news">Tin tức &amp; Sự kiện</a></li><li class="item-127"><a href="#" class="footer-share">Góc chia sẻ</a></li><li class="item-128"><a href="#" class="footer-library">Thư viện</a></li><li class="item-129"><a href="#" class="footer-award">Thành tích</a></li><li class="item-130"><a href="#" class="footer-time">Thời khoá biểu</a></li><li class="item-131"><a href="#" class="footer-canlendar"> Lịch khai giảng</a></li></ul>
												</div>
												<div class="moduletable">
													<h3>Khoá học</h3>
													<ul class="nav menumenu-footer">
														<li class="item-132"><a href="#" class="footer-note"> Luyện thi SAT</a></li><li class="item-133"><a href="#" class="footer-note">Luyện thi ACT</a></li><li class="item-134"><a href="#" class="footer-note"> Luyện thi TOEFL</a></li><li class="item-135"><a href="#" class="footer-note">Khóa học Leadership</a></li><li class="item-136"><a href="#" class="footer-note"> Lớp Application</a></li><li class="item-137"><a href="#" class="footer-note"> Lớp Interview</a></li><li class="item-138"><a href="#" class="footer-note">Viết sáng tạo</a></li></ul>
													</div>
													
													
												</div>
											</div>
										</div>
									</div>
								</footer>
								
								
							</body>
						</html>
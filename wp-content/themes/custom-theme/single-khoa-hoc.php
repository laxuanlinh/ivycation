<?php get_header() ?>
<section id="component">
	<!-- S: itemDetails -->
	<article id="itemDetails" class="coursesDetails">
		<!-- S: itemImage -->
		<div id="categoryimage" class="parallax-window" data-parallax="scroll" data-image-src="<?php the_field("ảnh-bìa") ?>" data-z-index="0">
			<div class="category-overlay"></div>
		</div>
		<!-- E: itemImage -->
		<!--S: hfbreadcrumbs -->
		<div id="hfbreadcrumbs">
			<div class="container">
				<ol class="breadcrumb">
					<li>
						<a href="<?php echo get_site_url() ?>">
							<i class="icon-home icons"></i>
						</a>
					</li>
					<?php while (have_posts()) : the_post(); ?>
					<?php
						$cat_array[] = array();
						$post_ID = get_the_ID();
						$category = get_the_category($post_ID);
						$cat_ID = $category[0]->parent;
						$cat_array[]=$category[0];
						while ($cat_ID) {
							$category = get_category($cat_ID);
							$cat_array[] = $category;
							$cat_ID = $category->parent;
						}
						$cat_array = array_reverse($cat_array);
						$url = get_site_url();
					?>
					<?php foreach ($cat_array as $item): ?>
					<?php $url = $url."/".$item->slug;?>
					<?php if ($item!=null): ?>
					<li>
						<a href="<?php echo $url ?>"><?php echo $item->cat_name ?></a>
					</li>
					<?php endif ?>
					<?php endforeach ?>
					<li><?php the_title() ?></li>
					<?php endwhile ?>
				</ol>
			</div>
		</div>
		<!--E: hfbreadcrumbs -->
		<!-- S: itemDetailwraper -->
		<div id="itemDetailwraper">
			<div class="container">
				<div class="row">
					
					<?php if (have_posts()) :?>
					<?php while (have_posts()) : the_post(); ?>
					<!-- S: itemDetailMain -->
					<div id="itemDetailMain" class="col-lg-8 col-md-8 col-xs-12 left-side">
						<header>
							<a class="itemCategory" href="/ivy/vn/ivycation-khoa-hoc/luyen-thi-chuan-hoa/luyen-thi-sat">
								SAT
							</a>
							<h1 class="itemTitle"><?php the_title() ?></h1>
							<div class="itemExtraInfo">
								<span>
								<i class="icon-clock icons"></i> <?php echo get_the_date() ?></span>
								<span>
								<i class="icon-heart icons"></i> <?php echo do_shortcode('[hit_count]') ?></span>
							</div>
						</header>
						<!-- S: social share -->
						<div id="itemShare">
							<span class="title">
								Chia sẻ nhanh
							</span>
							<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>">
								<i class="fa fa-facebook"></i>
							</a>
							<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink() ?>">
								<i class="fa fa-google-plus"></i>
							</a>
							<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink() ?>&amp;title=<?php the_title() ?>&amp;summary=<?php the_excerpt() ?>&amp;source=">
								<i class="fa fa-linkedin"></i>
							</a>
							<a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&amp;media=<?php echo get_the_post_thumbnail_url() ?>&amp;description=<?php the_excerpt() ?>">
								<i class="fa fa-pinterest-p"></i>
							</a>
							<div class="fb-like" data-href="https://www.facebook.com/ivycation" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
							<div id="fb-root"></div>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
						</div>
						<!-- E: social share -->
						<!-- S: item desc -->
						<div class="itemDesc">
							<?php the_content() ?>
						</div>
						<!-- E: item desc -->
						<!-- S: item related -->
						<div class="itemRelated">
							<!-- S: nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#item_related" aria-controls="item_related" role="tab" data-toggle="tab" aria-expanded="true">Bài viết liên quan</a>
								</li>
								<li role="presentation" class="">
									<a href="#item_other" aria-controls="item_other" role="tab" data-toggle="tab" aria-expanded="false">Bài viết khác</a>
								</li>
							</ul>
							<!-- E: nav tabs -->
							<!-- S: content tabs -->
							<div class="tab-content">
								<!-- S: content item_related -->
								<div role="tabpanel" class="tab-pane active" id="item_related">
									<div id="carousel-item_related8" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner" role="listbox">
											<div class="item active">
												<ul class="col3">
													<?php
														$category = get_the_category(get_the_ID());
														$firstCategory = $category[0]->term_id;
														$myquery = new WP_Query('cat='.$firstCategory);
														$count  = 1;
													?>
													<?php while($myquery->have_posts()):$myquery->the_post(); ?>
													<?php if ($count<4): ?>
													<li>
														<div class="hf-news-wrapper">
															<a class="hf-news-image" style="background:url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center transparent;background-size:cover;" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
																<span class="hf-hits"><?php echo do_shortcode('[hit_count]') ?></span>
															</a>
															<div class="hf-news-info">
																<a class="hf-news-title" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
																	<?php the_title() ?>
																</a>
															</div>
														</div>
													</li>
													<?php endif ?>
													<?php $count++;?>
													<?php endwhile ?>
												</ul>
											</div>
											<?php if ($myquery->post_count > 3): ?>
											<div class="item">
												<ul class="col3">
													<?php $count  = 1; ?>
													<?php while($myquery->have_posts()):$myquery->the_post(); ?>
													<?php if (3<$count && $count<7): ?>
													<li>
														<div class="hf-news-wrapper">
															<a class="hf-news-image" style="background:url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center transparent;background-size:cover;" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
																<span class="hf-hits"><?php echo do_shortcode('[hit_count]') ?></span>
															</a>
															<div class="hf-news-info">
																<a class="hf-news-title" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
																	<?php the_title() ?>
																</a>
															</div>
														</div>
													</li>
													<?php endif ?>
													<?php $count++;?>
													<?php endwhile ?>
												</ul>
											</div>
											<?php endif ?>
										</div>
										<!-- Controls -->
										<a class="left slider-control" href="#carousel-item_related8" role="button" data-slide="prev">
											<i class="icon-arrow-left icons"></i>
										</a>
										<a class="right slider-control" href="#carousel-item_related8" role="button" data-slide="next">
											<i class="icon-arrow-right icons"></i>
										</a>
									</div>
								</div>
								<!-- E: content item_related -->
								<!-- S: content item_other -->
								<div role="tabpanel" class="tab-pane" id="item_other">
									<div id="carousel-item_other8" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner" role="listbox">
											
											<div class="item active">
												<ul class="col3">
													<?php
														$myquery = new WP_Query("cat=");
														$count  = 1;
													?>
													<?php while($myquery->have_posts()):$myquery->the_post(); ?>
													<?php if ($count<4): ?>
													<li>
														<div class="hf-news-wrapper">
															<a class="hf-news-image" style="background:url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center transparent;background-size:cover;" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
																<span class="hf-hits"><?php echo do_shortcode('[hit_count]') ?></span>
															</a>
															<div class="hf-news-info">
																<a class="hf-news-title" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
																	<?php the_title() ?>
																</a>
															</div>
														</div>
													</li>
													<?php endif ?>
													<?php $count++;?>
													<?php endwhile ?>
												</ul>
											</div>
											<?php if ($myquery->post_count > 3): ?>
											<div class="item">
												<ul class="col3">
													<?php
														$myquery = new WP_Query("cat=");
														$count  = 1;
													?>
													<?php while($myquery->have_posts()):$myquery->the_post(); ?>
													<?php if (3<$count && $count<7): ?>
													<li>
														<div class="hf-news-wrapper">
															<a class="hf-news-image" style="background:url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center transparent;background-size:cover;" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
																<span class="hf-hits"><?php echo do_shortcode('[hit_count]') ?></span>
															</a>
															<div class="hf-news-info">
																<a class="hf-news-title" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
																	<?php the_title() ?>
																</a>
															</div>
														</div>
													</li>
													<?php endif ?>
													<?php $count++;?>
													<?php endwhile ?>
												</ul>
											</div>
											<?php endif ?>
										</div>
										<!-- Controls -->
										<a class="left slider-control" href="#carousel-item_other8" role="button" data-slide="prev">
											<i class="icon-arrow-left icons"></i>
										</a>
										<a class="right slider-control" href="#carousel-item_other8" role="button" data-slide="next">
											<i class="icon-arrow-right icons"></i>
										</a>
									</div>
								</div>
								<!-- E: content item_other -->
							</div>
							<!-- E: content tabs -->
						</div>
						<!-- E: item related -->
						<!-- S: comment -->
						<div class="fb-comments" data-href="https://www.facebook.com/ivycation" data-numposts="5"></div>
						<!-- E: comment -->
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
					<!-- E: itemDetailMain -->
					<!-- S: itemDetailRight -->
					<sidebar id="itemDetailRight" class="col-lg-4 col-md-4 col-xs-12 right-side">
					<!-- S: box -->
					<div class="box box-border box-courses">
						<h3 class="box-title">Danh mục</h3>
						<div class="box-content">
							
							<div id="k2ModuleBox119" class="k2CategoriesListBlock  menusidebar">
								<ul class="level0">
									<?php get_sidebar('khoa-hoc'); ?>
								</ul>
							</div>
						</div>
					</div>
					<!-- E: box -->
					<!-- S: box -->
					<?php get_sidebar("tin-tuc") ?>
					<!-- E: box -->
					<!-- S: box facebook -->
					<div class="fb-comments" data-href="<?php the_permalink() ?>" data-numposts="10"></div>
					<!-- E: box facebook -->
					<!-- S: box -->
					<?php get_sidebar("hoc-vien") ?>
					<!-- E: box -->
					</sidebar>
					<!-- E: itemDetailRight -->
				</div>
			</div>
		</div>
		<!-- E: itemDetailwraper -->
	</article>
	<!-- E: itemDetails -->
	<!-- JoomlaWorks "K2" (v2.7.1) | Learn more about K2 at http://getk2.org -->
</section>
<?php get_footer() ?>
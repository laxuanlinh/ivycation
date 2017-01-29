<?php 
/*
Template name: Template Tin tức sự kiện
Description: Template dành cho page chia sẻ & sự kiện
*/
?>
<?php get_header() ?>
<section id="mainbodywrapper">
	<section id="component">
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
					<?php endwhile ?>
				</ol>
				</div>
			</div>
			<!--E: hfbreadcrumbs -->
			<div id="newsContainer">
				<div class="container">
					<div class="row">
						<!-- S: mainbody-->
						<div id="itemDetailMain" class="col-lg-8 col-md-8 col-xs-12 left-side">
							<ul class="col2 newslisting">
								<?php 
									$category = get_the_category();
									$firstCategory = $category[0]->term_id;
									query_posts("cat=".$firstCategory)
								?>
								<?php if (have_posts()): ?>
									<?php while(have_posts()):the_post() ?>
										<li>
											<div class="item-news-wrap item-border">
												<a class="item-image" href="<?php the_permalink() ?>" title="<?php the_title() ?>" style="background:url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center transparent;background-size:cover;">
													<span class="item-hits">11</span>
												</a>
												<div class="item-courses-extra">
													<a class="item-title" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
														<?php the_title() ?>
													</a>
													<span class="item-time"><?php echo get_the_date() ?></span>
													<span class="item-intro">
														<?php the_excerpt() ?>
													</span>
												</div>
											</div>
										</li>
									<?php endwhile ?>
								<?php endif ?>

							</ul>
							
						</div>
						<!-- E: mainbody-->
						<!-- S: sidebar-->
						<sidebar id="itemDetailRight" class="col-lg-4 col-md-4 col-xs-12 right-side">
						<!-- S: box -->
						<?php get_sidebar("thong-tin-khoa-hoc") ?>
						<!-- E: box -->
						<!-- S: box facebook -->
						<div class="box box-clear box-facebook">
							<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://staticxx.facebook.com/connect/xd_arbiter/r/qXiJsurHCex.js?version=42#channel=f19ca0f158ea768&amp;origin=http%3A%2F%2Fdemo.hiflyer.vn" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/qXiJsurHCex.js?version=42#channel=f19ca0f158ea768&amp;origin=http%3A%2F%2Fdemo.hiflyer.vn" style="border: none;"></iframe></div></div></div>
							<script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
							fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
							<div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/ivycation" data-width="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=360&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fivycation&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"><span style="vertical-align: bottom; width: 340px; height: 230px;"><iframe name="f36a58bea24d248" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.7/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FqXiJsurHCex.js%3Fversion%3D42%23cb%3Df2e22a8f6e644bc%26domain%3Ddemo.hiflyer.vn%26origin%3Dhttp%253A%252F%252Fdemo.hiflyer.vn%252Ff19ca0f158ea768%26relation%3Dparent.parent&amp;container_width=360&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fivycation&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 340px; height: 230px;" class=""></iframe></span></div>
						</div>
						<!-- E: box facebook -->
						<!-- S: box -->
						<?php get_sidebar("hoc-vien") ?>
						<!-- E: box -->
						</sidebar>
						<!-- E: sidebar-->
					</div>
				</div>
			</div>
			<!-- JoomlaWorks "K2" (v2.7.1) | Learn more about K2 at http://getk2.org -->
		</section>
<?php get_footer() ?>
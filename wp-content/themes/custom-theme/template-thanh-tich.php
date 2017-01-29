<?php
/*
Template Name: Template thành tích
Description: Template dành cho page thành tích và subpage
*/
require_once("utils/header.php");
$header = new Header();
?>
<?php get_header() ?>
<section id="mainbodywrapper">
	<section id="component">
		
		<!--S: category image -->
		<div id="categoryimage" class="parallax-window" data-parallax="scroll" data-image-src="<?php the_field("ảnh_bìa") ?>" data-z-index="0">
			<div class="category-overlay"></div>
			<div class="container">
				<h1 class="categorytitle haspattern"><?php echo get_the_title() ?></h1>
				<div class="categorydescription"> </div>
			</div>
		</div>
		<!--E: category image -->
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
			<!-- S: itemDetails -->
			<article id="itemDetails" class="awardDetails">
				<div class="container">
					<div class="row">
						<!-- S: itemDetailMain -->
						<?php 
							$category = get_the_category();
							$firstCategory = $category[0]->term_id;
							query_posts("cat=".$firstCategory)
						?>
						<div id="itemDetailMain" class="col-lg-8 col-md-8 col-xs-12 left-side">
							<ul class="col1 awardlisting">
								<?php if (have_posts()): ?>
									<?php while(have_posts()):the_post(); ?>
										<li>
											<div class="item-award-wrap">
												<a class="item-image" href="<?php the_permalink() ?>" title="<?php the_title() ?>" style="background: url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center #fff;background-size:cover;">
												</a>
												<div class="item-award-info">
													
													<span class="oldschool">
													<?php the_field("trường") ?>								</span>
													<a class="item-title" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
														<?php the_title() ?>
													</a>
													<span class="newschool">
														<?php the_field("trường_2") ?>	<?php the_field("lương") ?>						
													</span>
													<div class="item-desc">
														<?php the_excerpt() ?>
													</div>
												</div>
											</div>
										</li>
									<?php endwhile ?>
								<?php endif ?>
							</ul>
							
						</div>
						<!-- E: itemDetailMain -->
						<!-- S: itemDetailRight -->
						<sidebar id="itemDetailRight" class="col-lg-4 col-md-4 col-xs-12 right-side">
						<!-- S: box -->
							<?php get_sidebar("thanh-tich") ?>
							<!-- E: box -->
							<!-- S: box -->
							<?php get_sidebar("thong-tin-khoa-hoc") ?>
							<!-- E: box -->
							<!-- S: box -->
							<?php get_sidebar("tin-tuc") ?>
							<!-- E: box -->
							<!-- S: box facebook -->
							<div class="box box-clear box-facebook">
								<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://staticxx.facebook.com/connect/xd_arbiter/r/D6ZfFsLEB4F.js?version=42#channel=f23d46374a1e2ec&amp;origin=http%3A%2F%2Fdemo.hiflyer.vn" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/D6ZfFsLEB4F.js?version=42#channel=f23d46374a1e2ec&amp;origin=http%3A%2F%2Fdemo.hiflyer.vn" style="border: none;"></iframe></div></div></div>
								<script>(function(d, s, id) {
								var js, fjs = d.getElementsByTagName(s)[0];
								if (d.getElementById(id)) return;
								js = d.createElement(s); js.id = id;
								js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
								fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>
								<div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/ivycation" data-width="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=360&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fivycation&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"><span style="vertical-align: bottom; width: 340px; height: 230px;"><iframe name="f652a93a17aa68" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.7/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FD6ZfFsLEB4F.js%3Fversion%3D42%23cb%3Df22d91796d2fd44%26domain%3Ddemo.hiflyer.vn%26origin%3Dhttp%253A%252F%252Fdemo.hiflyer.vn%252Ff23d46374a1e2ec%26relation%3Dparent.parent&amp;container_width=360&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fivycation&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 340px; height: 230px;" class=""></iframe></span></div>
							</div>
							<!-- E: box facebook -->
							
							</sidebar>
							<!-- E: itemDetailRight -->
						</div>
					</div>
				</article>
			</section>
<?php get_footer() ?>
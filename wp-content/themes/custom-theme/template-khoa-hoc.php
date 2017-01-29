<?php
/*
Template Name: Template khóa học
Description: Template dành cho page khóa học và các subpage
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
				<h1 class="categorytitle haspattern"><?php echo the_title() ?></h1>
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
		<!--S: category description -->
		<div id="categorydescription">
			<div class="container">
				<?php $count = 1 ?>
				<?php if (have_rows("q&a")): ?>
					<div id="accordion" class="panel-group">
						<?php while ( have_rows('q&a') ) : the_row(); ?><!-- S: panel-details -->
							<div class="panel panel-default">
								<div id="heading<?=$count?>" class="panel-heading">
									<h2 class="panel-title">
										<a href="#collapse<?=$count?>" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" class="collapsed"> 
											<?php the_sub_field("hỏi") ?>
									 	</a>
									 </h2>
								</div>
								<div id="collapse<?=$count?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<?php the_sub_field("trả_lời") ?>
									</div>
								</div>
							</div>
							<?php $count++ ?>
						<?php endwhile ?>
					</div>
				<?php endif ?>
			</div>
		</div>
		<!--E: category description -->
		<!--S: category listing -->
		<div id="categorylisting">
			<div class="container">
				<div class="row">
					<!-- S: itemDetailMain -->
					<div id="itemDetailMain" class="col-lg-8 col-md-8 col-xs-12 left-side">
						<ul class="col3 categorylisting">
							<?php
								$category = get_the_category();
								$firstCategory = $category[0]->term_id;
								query_posts("cat=".$firstCategory)
							?>
							<?php if (have_posts()):?>
							<?php while(have_posts()): the_post(); ?>
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
											<li class="item-hits"><?php echo do_shortcode('[hit_count]') ?></li>
										</ul>
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
					<div class="box box-border box-courses">
						<h3 class="box-title">Thành tích các năm</h3>
						<div class="box-content">
							
							<div id="k2ModuleBox119" class="k2CategoriesListBlock  menusidebar">
								<ul class="level0">
									<?php get_sidebar('khoa-hoc') ?>
								</ul>
							</div>
						</div>
					</div>
					<!-- E: box -->
					<!-- S: box -->
					<?php get_sidebar("thong-tin-khoa-hoc") ?>
					<!-- E: box -->
					</sidebar>
					<!-- E: itemDetailRight -->
				</div>
			</div>
		</div>
		<!--E: category listing -->
		<!-- JoomlaWorks "K2" (v2.7.1) | Learn more about K2 at http://getk2.org -->
	</section>
	<?php get_footer() ?>
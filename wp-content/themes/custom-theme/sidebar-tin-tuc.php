<?php
	$parent = get_category_by_slug('tin-tuc-su-kien');
	query_posts("cat=".$parent->cat_ID."&&posts_per_page=5");
?>
<div class="box box-border box-news">
	<h3 class="box-title">Tin tức &amp; Sự kiện</h3>
	<div class="box-content">
		
		<ul class="col1">
			<?php if (have_posts()): ?>
				<?php while(have_posts()):the_post() ?>
					<li>
						<a class="item-image" href="<?php echo get_the_post_thumbnail_url() ?>" title="<?php the_title() ?>" style="background: url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center #fff;background-size:cover;">
						</a>
						<div class="item-info">
							<a class="item-category" href="/su-kien-noi-bat">
							Tin tức &amp; Sự kiện</a>
							<a class="item-title" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
								<?php the_title() ?> 
							</a>
							<span class="item-hits">
								11				
							</span>
						</div>
					</li>
				<?php endwhile ?>
			<?php endif ?>
		</ul>
	</div>
</div>
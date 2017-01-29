<?php
	$parent = get_category_by_slug('khoa-hoc');
	query_posts("cat=".$parent->cat_ID);
?>
<div class="box box-border box-courses">
	<h3 class="box-title">Khoá học</h3>
	<div class="box-content">
		
		<ul class="col1">
			<?php if (have_posts()): ?>
				<?php while(have_posts()):the_post() ?>
					<?php $category = get_the_category(get_the_ID())?>
					<li>
						<a class="item-image" href="<?php the_permalink() ?>" title="<?php echo get_the_title() ?>" style="background: url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center #fff;background-size:cover;">
						</a>
						<div class="item-info">
							<a class="item-category" href="<?= get_category_link( $category[0]->cat_ID ); ?>">
								<?php echo $category[0]->cat_name ?>
							</a>
							<a class="item-title" href="<?php the_permalink() ?>" title="">
								<?php echo get_the_title() ?>
							</a>
							<span class="item-hits">
							91				
							</span>
						</div>
					</li>
			<?php endwhile; ?>
			<?php endif ?>
		</ul>
	</div>
</div>
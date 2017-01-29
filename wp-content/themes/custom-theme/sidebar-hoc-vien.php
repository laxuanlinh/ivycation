
<div class="box box-border box-student">
	<h3 class="box-title">Học viên tiêu biểu</h3>
	<div class="box-content">
		
		<ul class="col1">
			<?php 
				$category = get_category_by_slug("thanh-tich");
				query_posts("cat=".$category->term_id);
			?>
			<?php if (have_posts()): ?>
				<?php while(have_posts()):the_post() ?>
					<li>
						<a class="item-image" href="<?php the_permalink() ?>" title="Vũ Quang Anh" style="background: url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center #fff;background-size:cover;">
						</a>
						<div class="item-info">
							<a class="item-category" href="/thanh-tich">
								Thành tích
							</a>
							<span class="awardonly oldschool">
								<?php the_field("trường") ?>
							</span>
							<a class="item-title" href="<?php the_permalink() ?>" title="Vũ Quang Anh">
								<?php the_title() ?>
							</a>
							<span class="awardonly newschool">
								<?php the_field("trường_2") ?>
							</span>
							<span class="awardonly values">	
								<?php the_field("lương") ?>
							</span>
							<span class="awardonly marks">
							</span>
							<span class="item-hits">
							5				</span>
						</div>
					</li>
				<?php endwhile ?>
			<?php endif ?>			
		</ul>
	</div>
</div>
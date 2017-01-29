<?php get_header() ?>
<?php 
	$header = new Header();
?>
<section id="mainbodywrapper">
<section id="component">
<div id="coverimage" class="parallax-window" data-parallax="scroll" data-image-src="<?= the_field("ảnh_bìa") ?>" data-z-index="0">
	<div class="coverimage-overlay"></div>
	<div class="container">
		<h1 class="coverimage-title haspattern"><?= get_the_title() ?></h1>    
	</div>
</div>
<!--E: coverimage -->
<div id="mainaboutus">
	<div class="group-about">		
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="group-about-desc">
						<?php the_field("giới_thiệu_ngắn") ?>
					</div>		
				</div>
				<div class="col-md-6 col-xs-12">
					<div id="carousel-aboutus-image" class="carousel slide" data-ride="carousel">
						<?php $images = get_field("slide_ảnh_giao_viên") ?>
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<?php foreach ($images as $index => $image): ?>
								<li data-target="#carousel-aboutus-image" data-slide-to="<?= $index ?>" class="<?= $index==0?"active":"" ?>"></li>
							<?php endforeach ?>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<?php foreach ($images as $index => $image): ?>
								<div class="item <?= $index==0?"active":"" ?>" style="width: 535px; height: 356px">
									<img style="width: 100%; height: 100%" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
									<div class="carousel-caption">

									</div>
								</div>
							<?php endforeach ?>
						</div>
						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-aboutus-image" role="button" data-slide="prev"></a>
						<a class="right carousel-control" href="#carousel-aboutus-image" role="button" data-slide="next"></a>
					</div>			
				</div>
			</div>
		</div>
	</div>
	<div class="group-techer">
		<div class="container">		
			<div class="w90">
				<h2 class="txt-center"><?php the_field("tiêu_đề_vai_trò_giao_viên") ?></h2>
				<p class="txt-center"><?php the_field("vai_trò_giao_viên") ?></p>
				<div class="row">
					<div class="col-md-4 col-xs-12">
						<div class="techer-target">
							<i class="icon-fire icons"></i>
							<p>
								<?php the_field("vai_trò_1") ?>
							</p>
						</div>
					</div>
					<div class="col-md-4 col-xs-12">
						<div class="techer-target ">
							<i class="icon-graduation icons"></i>
							<p>					
								<?php the_field("vai_trò_2") ?>
							</p>
						</div>
					</div>
					<div class="col-md-4 col-xs-12">
						<div class="techer-target">
							<i class="icon-heart icons"></i>
							<p>					
								<?php the_field("vai_trò_3") ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="group-mainteacher">
		<div class="container">
			<div class="image" style="background-image:url(<?php the_field("ảnh_ca_nhân") ?>)"></div>
			<h2><?php the_field("tên_ca_nhân") ?></h2>
			<div class="w80">
			<article>
				<?php the_field("giới_thiệu_ca_nhân") ?>
			</article>			
			</div>
		</div>
	</div>
</div>
</section>

<?php get_footer() ?>
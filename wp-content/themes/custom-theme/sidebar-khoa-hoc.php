<!-- <?php
	$parent = get_category_by_slug('khoa-hoc');
	$categories = get_categories(array('parent'=>$parent->cat_ID, 'order'=>'DESC'));
?>
<?php foreach ($categories as $category): ?>
<li>
	<a href="/ivy/vn/ivycation-khoa-hoc/luyen-thi-chuan-hoa"><span class="catTitle"><?php echo $category->name ?></span><span class="catCounter"> 0</span></a>
	<ul class="level1">
		<?php
			$subs = get_categories(array('parent'=>$category->cat_ID));
		?>
		<?php foreach ($subs as $sub): ?>
		<li>
			<a href="/ivy/vn/ivycation-khoa-hoc/luyen-thi-chuan-hoa/luyen-thi-sat">
				<span class="catTitle">
					<?php echo $sub->name ?>
				</span>
				<span class="catCounter">
					<?php echo $sub->category_count-1 ?>
				</span>
			</a>
		</li>
		<?php endforeach ?>
	</ul>
</li>
<?php endforeach ?> -->
<?php 
	$main_menu = wp_get_nav_menu_items("header-menu");
	// $parent = get_category_by_slug('khoa-hoc');
	// var_dump($parent);
	// var_dump($main_menu)
	foreach ($main_menu as $item) {
		if (basename($item->url)=='khoa-hoc') {
			$parent = $item;
		}
	}

?>
<?php foreach ($main_menu as $item): ?>
	<?php if ($item->menu_item_parent == $parent->ID): ?>
		<li>
			<a href="<?php echo $item->url ?>"><span class="catTitle"><?php echo $item->title ?></span><span class="catCounter">0</span></a>
			<ul class="level1">
				<?php foreach ($main_menu as $sub): ?>
					<?php if ($sub->menu_item_parent==$item->ID): ?>
						<li>
							<a href="<?php echo $sub->url ?>">
								<span class="catTitle">
									<?php echo $sub->title ?>
								</span>
								<span class="catCounter">
									<?php 
										$slug = basename($sub->url);
										$temp_category = get_category_by_slug($slug);
										echo $temp_category->category_count-1;
									?>
								</span>
							</a>
						</li>
					<?php endif ?>
				<?php endforeach ?>
			</ul>
		</li>
	<?php endif ?>
<?php endforeach ?>
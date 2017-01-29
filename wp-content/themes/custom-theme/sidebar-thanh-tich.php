<?php
	$main_menu = wp_get_nav_menu_items("header-menu");
	foreach ($main_menu as $item) {
		if (basename($item->url)=='thanh-tich') {
			$parent = $item;
		}
	}
?>
<div class="box box-border box-courses">
	<h3 class="box-title">Danh mục</h3>
	<div class="box-content">
		<div id="k2ModuleBox120" class="k2CategoriesListBlock  menusidebar onelvl">
			<ul class="level0">
				<?php foreach ($main_menu as $item): ?>
					<?php if ($item->menu_item_parent == $parent->ID): ?>
						<li>
							<a href="<?php echo $item->url ?>">
								<span class="catTitle">
									<?php echo $item->title ?>
								</span>
								<?php
									$slug = basename($item->url);
									$temp_category = get_category_by_slug($item->title);
								?>
								<span class="catCounter">
									<?php echo $temp_category->category_count-1 ?>
								</span>
							</a>
						</li>
					<?php endif ?>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
</div>
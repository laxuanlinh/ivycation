<?php 
/**
* Class for header
*/
class Header
{
	public $main_menu;	
	public $absolute_path;

	function __construct()
	{
		$this->absolute_path = get_site_url()."/wp-content/themes/custom-theme";
		$this->main_menu = wp_get_nav_menu_items("header-menu");
	}

	function has_child($ID){
		$check = false;
		foreach ($this->main_menu as $temp) {
			if ($temp->menu_item_parent==$ID) {
				$check = true;
			}
		}
		return $check;
	}

	function get_menu(){ 
?>
	<?php foreach ($this->main_menu as $index => $item): ?>
		<?php if (!$item->menu_item_parent): ?>
			<li class="deeper parent">
				<a href="<?= $item->url ?>"><?= $item->title ?></a>
				<?php if ($this->has_child($item->ID)): ?>
					<ul class="nav-child unstyled small">
					<?php foreach ($this->main_menu as $sub): ?>
						<?php if ($sub->menu_item_parent==$item->ID): ?>
							<?php if ($this->has_child($sub->ID)): ?>
								<li class="deeper parent">
									<a href="<?= $sub->url ?>"><?= $sub->title ?></a>
									<ul class="nav-child unstyled small">
										<?php foreach ($this->main_menu as $subsub): ?>
											<?php if ($subsub->menu_item_parent==$sub->ID): ?>
												<li>
													<a href="<?= $subsub->url?>">
														<?= $subsub->title ?>
													</a>
												</li>
											<?php endif ?>
										<?php endforeach ?>
									</ul>
								</li>
							<?php else: ?>
								<li>
									<a href="<?= $sub->url ?>"><?= $sub->title ?></a>
								</li>
							<?php endif ?>
						<?php endif ?>
					<?php endforeach ?>
					</ul>
				<?php endif ?>
			</li>
		<?php endif ?>
	<?php endforeach ?>
<?php 
	}
}
?>
jQuery(document).ready(function ($) {
	jQuery(".menu-item-has-children > a").click(function (e) {
		e.preventDefault();
	});
	jQuery(".menu-item-has-children").click(function (e) {
		jQuery(this).find(".sub-menu").toggle();
	});
});

jQuery(document).ready(function ($) {
	jQuery(".menu-item-has-children").click(function (e) {
		e.preventDefault();
		jQuery(this).find(".sub-menu").toggle();
	});
});

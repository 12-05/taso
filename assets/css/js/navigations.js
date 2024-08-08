jQuery(document).ready(function ($) {
	jQuery(".menu-item-has-children > a").click(function (e) {
		e.preventDefault();
		jQuery(this).parent().find(".sub-menu").toggle();
	});
});

jQuery(document).ready(function ($) {
	jQuery(".menu-item-has-childre > a").click(function (e) {
		e.preventDefault();
		jQuery(this).parent().find(".sub-menu").toggle();
	});
});

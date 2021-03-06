<?php 

get_header();
$produkte = get_posts(array(
    'post_type' => 'produkt',
    'posts_per_page' => -1,
    'order' => "ASC",
    'orderby' => 'date'
));

?>
<div class="wrapper">
<div class="row produktrow">
    <div class="produktrow--sidebar">
        <h3 class="row-headline--subline">Produkte</h3>
        <ul>
<?php if($produkte): foreach ($produkte as $produkt) :?>

   <li> <span class="produktrow--sidebar-item">
        <a href="<?php echo get_permalink($produkt->ID);?>" > <?php the_field('bezeichnung', $produkt->ID) ?> </a>
    </span></li>

    <?php endforeach;endif ?>
    </ul>
    </div>

<div class="produktrow--main">
<h2 class="row-headline--headline"><?php the_field('bezeichnung') ?></h2>
<p><?php the_field('beschreibung') ?></p>
<?php if (get_field('buttontext')): ?>
    <a  style="text-decoration:none;" href="/kontakt">
<div class="produkt-button"> <?php the_field('buttontext') ?></div>
</a>
<?php endif; ?>
</div>
<div class="produktrow--galerie">
<img class="produktrow--galerie-main_image" src="<?php the_field('hauptbild')?>" />
<br/>
<?php if( have_rows('downloads') ):?><h3 class="produkt-single">Downloads:</h3><?php endif;?>
<ul>
<?php if( have_rows('downloads') ):
// Loop through rows.
while( have_rows('downloads') ) : the_row(); ?>



<li> <a target="_blank" href="<?php the_sub_field('datei') ?>" ><?php the_sub_field('dateiname')?></a></li>

<?php endwhile; ?>


<?php else :?>


<?php endif;?>
</ul>
</div>
</div>
</div>
<?php
get_sidebar();
get_footer();
?>
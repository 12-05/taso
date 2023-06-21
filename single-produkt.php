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
<ul style='display:flex;flex-wrap:wrap;'>
<?php if( have_rows('downloads') ):
 $data=get_field('downloads');
foreach($data as $file): ?>



<li style='display:flex;flex-direction:column;margin-top:20px;margin-right:20px;'> 
<?php 
				$image = wp_get_attachment_image_src( $file['datei'], 'medium' );
				?>
				<?php if($image) {?>
					<img src="<?php echo $image[0];?>" width="100" height='150' alt="Preview" />
				<?php } ?> 

<a target="_blank" href="<?php echo wp_get_attachment_image_src($file['datei'], 'full')[0]; ?>" ><?php echo $file['dateiname']?></a></li>

<?php endforeach; ?>


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

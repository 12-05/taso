<?php 

get_header();
$posts = get_posts(array(
    'post_type' => 'produkt',
    'posts_per_page' => -1,
    'order' => "ASC",
    'orderby' => 'date'
));

?>
<div id="main-content" class="main-content product-archive">
       
	<div id="primary" class="content-area">
      
		<div id="content" class="site-content" role="main">
              
       <div class="row row-headline">
               <div class="row-headline--subline " >
                     <?php if(the_sub_field('subtitle')){ the_sub_field('subtitle');}else{ the_field('subline_produkte','option');}?>
                </div>
                <h2 class="row-headline--headline">
                        <span class="underline">
                        <?php if(the_sub_field('title')){ the_sub_field('title');}else{ the_field('uberschrift_produkte','option');} ?>
                        </span>
                </h2>
       
        </div>

        <div class="row row-produkt_ubersicht">

        <?php if($posts):foreach($posts as $produkt):?>
                <a href="<?php echo get_permalink($produkt->ID);?>" class="kachel">
                   <div class='product-image' style="background-image:url(<?php the_field('hauptbild', $produkt->ID); ?>)" ></div>
                   <div class="wrapper_h3"><h3><?php the_field('bezeichnung', $produkt->ID); ?></h3></div>
                </a>
    <?php endforeach;endif;?>

		</div><!-- #content -->
        <?php if (get_field('einleitungstext_produkte','option')): ?> 
            <div class=" row einleitungstext">
               <?php the_field('einleitungstext_produkte','option') ?>
            </div>
<?php endif; ?>
	</div><!-- #primary -->

</div><!-- #main-content -->
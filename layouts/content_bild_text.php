

    <div class="row row-bildtext">
         <?php if (get_sub_field('uberschrift')):?>
         <h4 class="row-headline--headline"><span class="underline"><?php echo the_sub_field('uberschrift') ?></span></h4>
<?php endif; ?>
<?php if (get_sub_field('bild')): ?>
           <div class="bildtext-inner">
           <?php if (!get_sub_field('bild_rechts')){ ?>
         <div class="row-bildtext--img-left"><img   src="<?php the_sub_field('bild'); ?>" /></div>
         <div><p style="text-align:left;"><?php the_sub_field('text'); ?></p></div>
         <?php } else { ?>
            <div><p><?php the_sub_field('text'); ?></p></div>
            <div class="row-bildtext--img-right"><img   src="<?php the_sub_field('bild'); ?>" /></div>
            <?php } ?>
        </div>
        <?php else :  ?>
        <div class="bildtext-inner" style="grid-template-columns: 1fr!important;">
        <div><p style="text-align:center;"><?php the_sub_field('text'); ?></p></div>
      
            </div>
            <?php endif; ?>
        </div>
       
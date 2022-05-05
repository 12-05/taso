
    <div id="besatzarten">
   
    <div class="row">
    <?php if (get_sub_field('uberschrift')):?>
         <h4 class="row-headline--headline"><span class="underline"><?php echo the_sub_field('uberschrift') ?></span></h4>
<?php endif; ?>
 <?php if (get_sub_field('inhalt')): ?> <div><?php the_sub_field('inhalt') ?></div>
    <?php endif; ?>
</div>
</div>

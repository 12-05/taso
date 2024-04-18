
 <div class="row">
            <div class="contact_page">

    <?php if (get_sub_field('contactform_shortcode')): ?>
        <div class="form">
<?php the_sub_field('contactform_shortcode')?>
    </div>
<?php endif;?>
    <?php if (get_sub_field('content')): ?>
    <div class="content">
        <?php the_sub_field('content')?>
    </div>
    <?php endif;?>
</div>
</div>
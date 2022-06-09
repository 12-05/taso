
 <div class="row">
            <div class="contact_page">
       
    <?php if (get_sub_field('contactform_shortcode')): ?>
        <div class="form">
<?php the_sub_field('contactform_shortcode') ?>
    </div>
<?php endif; ?>
    <?php if (get_sub_field('content')): ?>
    <div class="content">
        <?php the_sub_field('content') ?>
        <iframe style='width:100%;border:none' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2501.2941422052295!2d7.05607771626915!3d51.17680134264135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8d47fe7a55285%3A0xaa2edfebee8d680!2sKleinenberger%20Str.%2014-16%2C%2042719%20Solingen!5e0!3m2!1sde!2sde!4v1654785295415!5m2!1sde!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php endif; ?>
</div>
</div>

<div class="wrapper_taso_hero">
<div class="bg-video-wrapper">
  <?php if(get_sub_field('historie')):?>
    <video src="<?php the_field('historie_video','option')?>"  loop muted autoplay>
    </video>
    <?php else:?>
    <video src="<?php the_field('video','option')?>"  loop muted autoplay>
    </video>
    <?php endif; ?>
    <div class="bg-video-overlay">
</div>
 <!--    <h1 class="bg-video-h1">Text über Video
    </h1> -->
  </div>
       

        </div>
        
  
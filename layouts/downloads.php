<?php $datas=get_sub_field('oberkatgorie')?>
<?php $firefox=strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') ?>
<div class='downloads-container row'>
        <?php foreach($datas as $data):?>
        <div class='downloads-item'>
            <div class='downloads-ober-title'><?php echo $data['name']?></div>
            <div class='downloads-unter-container'>
            <?php foreach($data['unterkatgorie'] as $unterdata ):?>
                <?php if($unterdata['name']):?>
                        <div class='downloads-unter-title'><?php echo $unterdata['name']?></div><?php endif;?>
                <div class='downloads-unter-container-box' style='margin-top:12px;display:flex;margin-bottom:32px;margin-right:72px'>
                <?php if($unterdata['bild']){?>
                   <div src='<?php echo $unterdata['bild'] ?>' style='width:300px;height:250px;margin-right:12px;background-size:cover;background-position:center;background-image:url(<?php echo $unterdata['bild']?>)'></div>
                <?php }?>
                <div>
            
                        <div class='files' style='flex-wrap:wrap;max-width:800px;'> 
                        <?php foreach($unterdata['files'] as $file):?>
                        <div  style='display:flex;flex-direction:column;margin-right:32px;'>
				<?php 
				$image = wp_get_attachment_image_src( $file['file'], 'medium' );
				?>
                              	<img src="<?php echo $image;?>" width="150" alt="Preview" />
                                <a target='_blank' href='<?php echo wp_get_attachment_url($file['file']); ?>' style='max-width:120px;font-size:0.8rem'><?php echo $file['filename']?></a>
                        </div>
                        <?php endforeach;?>
                        </div>
                        </div>
                </div>
            <?php endforeach;?>
          
             </div>
        </div>
        <?php endforeach;?>
</div>

<?php $datas=get_sub_field('oberkatgorie')?>
<div class='downloads-container row'>
        <?php foreach($datas as $data):?>
        <div class='downloads-item'>
            <div class='downloads-ober-title'><?php echo $data['name']?></div>
            <div class='downloads-unter-container'>
            <?php foreach($data['unterkatgorie'] as $unterdata ):?>
                <?php if($unterdata['name']):?>
                        <div class='downloads-unter-title'><?php echo $unterdata['name']?></div><?php endif;?>
                <div style='margin-top:12px;margin-bottom:32px;display:flex;margin-right:72px'>
                <?php if($unterdata['bild']){?>
                   <div src='<?php echo $unterdata['bild'] ?>' style='width:300px;height:250px;margin-right:12px;background-size:cover;background-position:center;background-image:url(<?php echo $unterdata['bild']?>)'></div>
                <?php }?>
                <div>
          
                        <div class='files' style='flex-wrap:wrap'> 
                        <?php foreach($unterdata['files'] as $file):?>
                        <div style='display:flex;flex-direction:column;margin-right:32px;'>
                                <iframe scrolling="no" src="<?php echo $file['file']?>" style="width: 100px;height:100%;border: none;"></iframe>
                                <a target='_blank' href='<?php echo $file['file']?>' style='max-width:100px'><?php echo $file['filename']?></a>
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
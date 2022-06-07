<?php $datas=get_sub_field('oberkatgorie')?>
<div class='downloads-container row'>
        <?php foreach($datas as $data):?>
        <div class='downloads-item'>
            <div class='downloads-ober-title'><?php echo $data['name']?></div>
            <?php foreach($data['unterkatgorie'] as $unterdata ):?>
                <?php if($unterdata['name']):?><div class='downloads-unter-title'><?php echo $unterdata['name']?></div><?php endif;?>
                        <div class='files'> 
                        <?php foreach($unterdata['files'] as $file):?>
                                <a target='_blank' href='<?php echo $file['file']?>'><?php echo $file['filename']?></a>
                        <?php endforeach;?>
                        </div>
            <?php endforeach;?>
        </div>
        <?php endforeach;?>
</div>
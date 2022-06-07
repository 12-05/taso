<?php $partners=get_sub_field('partners')?>
<div class='partner-container'>
        <h2>Ihre Ansprechpartner</h2>
        <div class='partner-list'>
                 <?php foreach($partners as $partner):?>
                 <div class='partner-item'>
                    <div class='partner-name'><?php echo $partner['name']?></div>
                    <div class='partner-position'><?php echo $partner['position']?></div>
                        <a href='tel:<?php echo $partner['phone']?>' class='phone'><?php echo $partner['phone']?></a>
                        <a href='mailto:<?php echo $partner['email']?>' class='email'><?php echo $partner['email']?></a>
                 </div>
                 <?php endforeach;?>
        </div>
</div>
<div id="footer">
      <!-- unwichtigere Funktionen -->

 <div class="row footer--contents">  
    <div class="footer--kontakt">
      <?php if( have_rows('adresse','option') ): ?>
      <?php while( have_rows('adresse', 'option') ): the_row(); ?>
      <h4>Kontakt</h4>
         <ul>
           <li class="adresse-firma"><?php echo the_sub_field('firma','option')?></li>
           <li class="adresse-straßehausnummer"><?php echo the_sub_field('strase_hausnummer','option')?></li>
           <li class="adresse-plzort"><?php echo the_sub_field('plz_ort','option')?></li><br/>
           <?php endwhile; ?>
           <?php endif; ?> 
           <li class="footer--kontakt-li">Tel.: <span><a href="tel:<?php the_field('telefon','option') ?>"> <?php echo the_field('telefon','option')?></a></span></li>
           <li class="footer--kontakt-li">Fax: <span><a href="tel:<?php the_field('fax','option') ?>"> <?php echo the_field('fax','option')?></a></span> </li><br/>
           <li class="footer--kontakt-li">E-Mail: <a href="mailto:<?php the_field('e-mail','option') ?>"> <?php echo the_field('e-mail','option')?></a></li>
         </ul>
    </div>
    
    <div class="footer--logo">
      <div>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
<?php if ( get_field('logo' , 'option') ) { ?>
<img src="<?php the_field('logo','option') ?>" alt="" width="<?php the_field('logo_size','option') ?>"/>
<?php } else {
bloginfo( 'title' ); 
} ?>
</a>
</div>
    </div>
    
     <div class="footer--informationen">
      <h4>Informationen</h4>
        <?php
         
         wp_nav_menu( array(
             'theme_location' => 'footer-menu', 
             'container' => '', 
             'menu_class' => 'footer_menu', 
             'menu' => 'Footer Menü'
           )); ?>
      </div>    
          
          
          
        
   </div><!-- footer -->
   <div class="footer-copyright">2022 Ⓒ TASO Fritz Thaler Jun. GmbH</div> 

</div><!-- wrapper -->

<?php wp_footer(); ?>
    
<!-- Statistik/Analyse-Tool einbauen -->
 <script>

document.querySelector('#menu-toggle').addEventListener('click', (e) => {
  toggleBodyClass('menu-active');
});

function toggleBodyClass(className) {
  document.body.classList.toggle(className);
}


 </script>
</body>
</html>

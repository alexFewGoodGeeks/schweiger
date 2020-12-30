<?php 

//get all datas
$nd_options_customizer_footer_5_content_page = get_option( 'nd_options_customizer_footer_5_content_page' );
if ( $nd_options_customizer_footer_5_content_page == '' ) { $nd_options_customizer_footer_5_content_page = '';  }


?>

<?php /*
<!--START footer-->
<div id="nd_options_footer_5" class="nd_options_section">

    <!--start nd_options_container-->
    <div class="nd_options_container nd_options_clearfix">

        <?php

        if ( $nd_options_customizer_footer_5_content_page != '') {

            $nd_options_post   = get_post($nd_options_customizer_footer_5_content_page);
            $nd_options_post_output =  apply_filters( 'the_content', $nd_options_post->post_content );
            
            //echo all footer page
            echo $nd_options_post_output;

            $nd_options_strings  = $nd_options_post->post_content;
            $nd_options_pieces = explode('css=".vc_custom_', $nd_options_strings);
            
            //get how many styles inserted
            $nd_options_qnt_styles = count($nd_options_pieces)-1;


            //echo style
            echo '<style>';
            for ($nd_options_i = 1; $nd_options_i <= $nd_options_qnt_styles; $nd_options_i++) {
                $tests = explode(';}"][', $nd_options_pieces[$nd_options_i]);
                echo '.vc_custom_'.$tests[0].';}';
            }
            echo '</style>';

        }

        ?>

    </div>
    <!--end container-->

</div>
<!--END footer-->
 <?php */ ?>

<div class="nd_options_container">
<div class="footer">
    <div class="footer-images">
        <?php for($i=1; $i<9; $i++) { ?>
            <img class="footer-image" src="/wp-content/uploads/images/footer/footer_image<?php echo $i ?>.png" />
        <?php } ?>
    </div>
    <div class="footer-buttons">
            <a href="" class="btn-red">auf instagram folgen</a>
            <a href="" class="btn-red">auf facebook folgen</a>
    </div>
    <div class="footer-section">
      <ul class="footer-items">
          <li class="copyright">
              <p class="">
                  © Schweiger 2020 Alle Rechte vorbehalten
              </p>
          </li>
          <li class="logo">
              <img src="/wp-content/uploads/images/footer_logo.png" />
          </li>
          <li class="links">
              <ul>
                  <li><a href="">Kontakt</li>
                  <li><a href="">AGB</li>
                  <li><a href="">Datenschutz</li>
                  <li><a href="">Impressum</li>
              </ul>
          </li>
      </ul>
    </div>
</div>
</div>
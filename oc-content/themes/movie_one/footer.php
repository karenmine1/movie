<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "container" div and all content after.
 *
 * @author www.ocimscripts.com
 * @subpackage TMDB TWO 1.0
 */
?>
	</div><!-- row -->

</div><!-- container -->
<footer class="footer">
        <div class="copyright">
                <div class="container">
                        <span>Copyright &copy; <?php echo date( 'Y' );?> <a href="<?php echo site_url();?>"><?php echo config( 'sitename' );?></a>. All rights reserved. <a href="<?php echo view_page( 'dmca' );?>">DMCA</a> | <a href="<?php echo view_page( 'privacy' );?>">Privacy</a> | <a target="_blank" rel="follow" href="<?php echo site_url();?>/sitemap.xml">Sitemap</a></span>
                </div><!-- container-->
        </div>
</div>
<div class="online">
        <span class="online-icon"></span>
        <div class="online-text">
                <?php
                        $onlineNumber = range(9700, 16000);
                        $online = $onlineNumber[array_rand($onlineNumber)];

                        echo '<p>' . $online . ' Users Online Now</p>';
                 ?>
        </div>
</div><!-- copyright -->


</footer><!-- .footer -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo site_url();?>/oc-includes/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js" type="text/javascript"></script>
    <script src="<?php style_theme();?>/js/screenfull.min.js"></script>
    <script src="<?php style_theme();?>/js/script.js"></script> 						
</body>
</html>
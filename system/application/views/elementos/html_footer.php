<?php
$url = $_SERVER['REQUEST_URI'];
$pieces = explode("/",$url);
@$url = $pieces[2]; // piece2
?>
<div class="bot">
        <div <?php if($url=="contact"){echo "class='hide'";} ?>>
            <div class="container_16">
              <div class="grid_4">
                    <h4>Member - 2010 CMA</h4>
                      <p>
                        <img src="<?php echo base_url()?>images/cma.gif">
                      </p>
                      <a href="http://www.the-cma.org/">Visite the Website</a>
                  </div>
              <div class="grid_4">
                    <h4>Business partner</h4>
                      <p>
                        <img src="<?php echo base_url()?>images/print.jpg" width="170px">
                      </p>
                  </div>
              <div class="grid_4">
                    <h4>elsewhere</h4>
                      <div class="social">
                        <div>
                          
                          <a href="#"><img src="<?php echo base_url()?>/images/rss_icon.png" alt=""> Rss feed</a>
                              <div class="clear"></div>
                          </div>
                          <div>
                          
                          <a href="#"><img src="<?php echo base_url()?>/images/fb_icon.png" alt=""> Facebook</a>
                              <div class="clear"></div>
                          <div>
                          </div>
                          
                          <a href="#"> <img src="<?php echo base_url()?>/images/twitter_icon.png" alt="">Twitter</a>
                              <div class="clear"></div>
                          </div>
                      </div>
                  </div>
              <div class="grid_4">
                    <h4>Contacts</h4>
                      <div class="phone1"><span><a href="<?php echo base_url()?>contact">416-488-9895</a></span>
                        <a href="<?php echo base_url()?>contact">studio@CreativeTeam.ca</a>
                      </div>
                      <address>Toronto, ON M5P 3L6<br>Canada</address>
                  </div>
              <div class="clear"></div>
            </div>
          </div>
      </div>
  </div>
</div>

<!--Footer-->
<footer>
  <div class="container_16">
    <div class="wrapper">
      <div class="grid_16 copy"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>/images/footer_logo.png" alt=""></a>  <span>&copy; all rights reserved</span> <!--{%FOOTER_LINK} --> 
      </div>
    </div>
  </div>
</footer>
<!-- Footer end-->

<!--LIVEDEMO_00 -->

<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>

</body>
</html>
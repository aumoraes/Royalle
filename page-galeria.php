<?php get_header(); ?>

        <div class="demo-gallery dark">
            <ul id="lightgallery" class="list-unstyled row">
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/img/1-1600.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                    <a href="">
                        <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/img/thumb-1.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/img/2-375.jpg 375, img/2-480.jpg 480, img/2.jpg 800" data-src="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/img/2-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/img/thumb-2.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/img/13-375.jpg 375, img/13-480.jpg 480, img/13.jpg 800" data-src="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/img/13-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/img/thumb-13.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/img/4-375.jpg 375, img/4-480.jpg 480, img/4.jpg 800" data-src="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/img/4-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/img/thumb-4.jpg">
                    </a>
                </li>
            </ul>
        </div>
        <script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
        </script>


    <?php get_footer();


<?php if ( ! is_front_page() ) { ?>
    <div class="news-contct">
        <div class="container">
            <div class="inner-news">
                <div class="iner-width">
                    <h6><?php the_field('headingcn', 'options'); ?></h6>
                <h3><?php the_field('sub_headingcn', 'options'); ?></h3>
                <p><?php the_field('contentcn', 'options'); ?></p>
                </div>
                <div class="iner-width1">
                   <div class="cin">
                       <a href="<?php the_field('contact_link'); ?>">Contact Us Today <img src="http://localhost/janus/wp-content/uploads/2021/03/right-arow.png"></a>
                   </div>
               </div>
           </div>
       </div>
   </div>
<?php } ?>
<footer>
    <div class="container">
        <div class="topContainer">
            <div class="row">
                <div class="col-md-4">
                    <div class="aboutcontentFotoer">
                        <h6>About company</h6>
                        <p>To use our Big Enterprise experience to leverage cutting-edge technologies and methodologies to deliver successful solutions for small- and medium-sized businesses, (and funded startups) leading to groundbreaking success.  </p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="listConyainer">
                        <h6>Quick Links</h6>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Why Us</a></li>
                            <li><a href="#">Solutions   </a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">FAQ's</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="lastCOlumnSectionFOoter">
                        <h6>Learn More</h6>
                        <p>Download our brochure to learn more about the company.</p>
                        <a href="#" class="downloadFile"><img src="<?php echo get_template_directory_uri(); ?>/images/6.svg">Download Brochure</a>
                        <div class="emailUs">
                            <h5>Email Us Now!</h5>
                            <a href="mailto:info@janusconsultingpartners.com"> info@janusconsultingpartners.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script>
<!-- custom js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

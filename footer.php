<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package Rimk
 */

?>

<!-- start footer area -->
<footer data-img="<?php echo RIMKTHEME_LINK  ?>assets/images/footer-bg.jpg">
    <!-- start footer-top area -->
    <section class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="content">
                        <div class="title">
                            <h5>get in touch</h5>
                        </div>
                        <ul class="address">
                            <li class="d-flex align-items-center">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <p>(800) 123 456 789</p>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <p>+1 800 123 4567</p>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <p> example@mail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="content">
                        <div class="title">
                            <h5>about us</h5>
                        </div>
                        <ul class="links">
                            <li><a href="blog.html"><p>blog & articles</p></a></li>
                            <li><a href="service-detail.html"><p>exterior</p></a></li>
                            <li><a href="service-detail.html"><p>industrial</p></a></li>
                            <li><a href="service-detail.html"><p>residential</p></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="content">
                        <div class="title">
                            <h5>working hours</h5>
                        </div>
                        <div class="time-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <ul class="times">
                                        <li>
                                            <p>monday</p>
                                            <p>10:00 - 11:00</p>
                                        </li>
                                        <li>
                                            <p>tuesday</p>
                                            <p>09:00 - 12:00</p>
                                        </li>
                                        <li>
                                            <p>thusrday</p>
                                            <p>10:30 - 11:30</p>
                                        </li>
                                        <li>
                                            <p>sunday</p>
                                            <p>10:00 - 11:00</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="swiper-slide">
                                    <ul class="times">
                                        <li>
                                            <p>monday</p>
                                            <p>10:00 - 11:00</p>
                                        </li>
                                        <li>
                                            <p>tuesday</p>
                                            <p>09:00 - 12:00</p>
                                        </li>
                                        <li>
                                            <p>thusrday</p>
                                            <p>10:30 - 11:30</p>
                                        </li>
                                        <li>
                                            <p>sunday</p>
                                            <p>10:00 - 11:00</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="content newsletter">
                        <div class="title">
                            <h5>newsletter</h5>
                        </div>
                        <p>Fill their seed open meat. Sea you great Saw image stl</p>
                        <div class="form-area">
                            <input type="email" placeholder="email address" class="inputs">
                            <button type="submit">subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end footer-top area -->

    <!-- start footer-bottom area -->
    <section class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg">
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Copyright &copy; 2021, Themes-Land All Rights Reserved.</p>
                            </div>
                            <div class="col-lg-6">
                                <ul class="d-flex justify-content-end">
                                    <li><a href="about.html">about us</a></li>
                                    <li><a href="service.html">service</a></li>
                                    <li><a href="#!">privacy policy</a></li>
                                    <li><a href="contact.html">contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end footer-bottom area -->
</footer>
<!-- end footer area -->


<!-- Google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"></script>


<?php wp_footer(  ); ?>
</body>
</html>
<!-- Footer Section Start -->
<div class="section footer-section">

    <!-- Footer Widget Start -->
    <div class="footer-widget-section section-padding">
        <div class="container">

            <!-- Footer Widget Wrapper Start -->
            <div class="footer-widget-wrapper">
                <div class="row">
                    <div class="col-lg-5 col-md-6 order-md-1 order-lg-1">

                        <!-- Footer Widget Start -->
                        <div class="footer-widget" data-aos="fade-up" data-aos-delay="100">
                            <a class="footer-logo" href="<?php echo base_url('main'); ?>"><img src="<?php echo base_url(); ?>/img/<?= $this->shop_info->get_shop_logo(); ?>" alt="Logo"></a>
                            <div class="widget-info">
                                <h6 class="title">Alamat Bengkel</h6>
                                <p><?= $this->shop_info->get_shop_address(); ?></p>
                                <p><span>Phone</span>: <a href="https://api.whatsapp.com/send?phone=<?= $this->shop_info->get_shop_whatsapp(); ?>" target="_blank"><i class="fa fa-whatsapp mx-1"></i>Whatsapp Disini!</a></p>
                                <p><span>Email</span>: <a href="mailto:<?= $this->shop_info->get_shop_email(); ?>" target="_blank"><?= $this->shop_info->get_shop_email(); ?></a></p>
                            </div>
                        </div>

                        <!-- Footer Widget End -->


                    </div>
                    <div class="col-lg-4 col-md-12 order-md-3 order-lg-2">

                        <!-- Footer Link End -->
                        <div class="footer-link-wrapper">

                            <!-- Footer Widget Start -->
                            <div class="footer-widget" data-aos="fade-up" data-aos-delay="200">
                                <h3 class="footer-widget-title">Quick Links</h3>

                                <ul class="widget-link">
                                    <li><a href="<?php echo base_url('member/services');?>">Services</a></li>
                                    <li><a href="<?php echo base_url('contact');?>">Contact</a></li>
                                    <li><a href="<?php echo base_url('member/login');?>">Login</a></li>
                                    <li><a href="<?php echo base_url('member/register');?>">Register</a></li>
                                </ul>

                            </div>
                            <!-- Footer Widget End -->

                        </div>
                        <!-- Footer Link End -->

                    </div>
                    <div class="col-lg-3 col-md-6 order-md-2 order-lg-3">

                        <!-- Footer Widget Start -->
                        <div class="footer-widget" data-aos="fade-up" data-aos-delay="400">
                            <h3 class="footer-widget-title">Kontak Kami</h3>

                            <div class="widget-subscribe">
                                <p>Klik tombol untuk informasi lebih lanjut.</p>
                                <a href="https://api.whatsapp.com/send?phone=<?= $this->shop_info->get_shop_whatsapp(); ?>" target="_blank" class="btn btn-custom-01 mt-3">Hubungi Sekarang</a>
                            </div>

                        </div>
                        <!-- Footer Widget End -->

                    </div>
                </div>
            </div>
            <!-- Footer Widget Wrapper End -->

        </div>
    </div>
    <!-- Footer Widget End -->

    <!-- Footer Copyright End -->
    <div class="footer-copyright-section">
        <div class="container">

            <!-- Copyright Wrapper Start -->
            <div class="copyright-wrapper">

                <div class="copyright-text">
                    <p>&copy; 2021 <span><?= $this->shop_info->get_shop_name(); ?></span></p>
                </div>

                <div class="copyright-social">
                    <a href="<?= $this->shop_info->get_shop_facebook(); ?>" target="_blank"><i class="fa fa-facebook-f"></i></a>
                    <a href="<?= $this->shop_info->get_shop_instagram(); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="<?= $this->shop_info->get_shop_youtube(); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                </div>

            </div>
            <!-- Copyright Wrapper End -->

        </div>
    </div>
    <!-- Footer Copyright End -->

</div>
<!-- Footer Section End -->
<!-- Contact Section Start -->
<div class="section section-padding-02 no-banner mb-5">
    <div class="container">

        <!-- Contact Wrapper Start -->
        <div class="contact-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Image Start -->
                    <div class="contact-image" data-aos="fade-right" data-aos-delay="300">
                        <img src="<?php echo base_url(); ?>img/bg-home.jpg" alt="Contact">
                    </div>
                    <!-- Contact Image End -->
                </div>
                <div class="col-lg-6">
                    <!-- Contact Content Start -->
                    <div class="contact-content" data-aos="fade-left" data-aos-delay="300">
                        <h2 class="title">Hubungi Kami</h2>

                        <div class="content-info">
                            <div class="row gx-md-5">
                                <div class="col-md-6">
                                    <!-- Single Info Start -->
                                    <div class="single-info">
                                        <h4 class="info-title">Alamat bengkel</h4>
                                        <p><?= $this->shop_info->get_shop_address(); ?></p>
                                    </div>
                                    <!-- Single Info End -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Single Info Start -->
                                    <div class="single-info">
                                        <h4 class="info-title">No. Whatsapp</h4>
                                        <p><a href="https://api.whatsapp.com/send?phone=<?= $this->shop_info->get_shop_whatsapp(); ?>" target="_blank"><i class="fa fa-whatsapp mx-1"></i>Whatsapp Disini!</a></p>
                                    </div>
                                    <!-- Single Info End -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Single Info Start -->
                                    <div class="single-info">
                                        <h4 class="info-title">Email</h4>
                                        <p><a href="mailto:<?= $this->shop_info->get_shop_email(); ?>"><?= $this->shop_info->get_shop_email(); ?></a></p>
                                    </div>
                                    <!-- Single Info End -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Single Info Start -->
                                    <div class="single-info">
                                        <h4 class="info-title">Sosial Media</h4>
                                        <ul class="social">
                                            <li><a href="<?= $this->shop_info->get_shop_facebook(); ?>" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                                            <li><a href="<?= $this->shop_info->get_shop_instagram(); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="<?= $this->shop_info->get_shop_youtube(); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Single Info End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Content End -->
                </div>
            </div>
        </div>
        <!-- Contact Wrapper End -->

    </div>
</div>
<!-- Contact Section End -->
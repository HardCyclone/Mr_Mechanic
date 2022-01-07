<!-- Slider Section Start -->
<div class="section slider-section">

    <!-- Slider Section Start -->
    <div class="single-slider" style="background-image: url(<?php echo base_url(); ?>img/bg-home.jpg);">
        <div class="container">

            <!-- Slider Section Start -->
            <div class="slider-content">
                <h5 class="sub-title" data-aos="fade-up" data-aos-delay="100"> garasi buat semua jenis mobil</h5>
                <h1 class="main-title" data-aos="fade-up" data-aos-delay="400">Butuh Servis Mobil Yang Terpercaya?</h1>
                <p data-aos="fade-up" data-aos-delay="600">Servis mobil bisa sangat melelahkan. Mempercayakan perawatan dan pilihan produk sparepart kepada ahlinya memastikan keamanan mobil anda terjaga. </p>
                <a href="https://api.whatsapp.com/send?phone=<?= $this->shop_info->get_shop_whatsapp(); ?>" target="_blank" data-aos="fade-up" data-aos-delay="800" class="btn btn-custom-01">Konsultasi</a>
            </div>
            <!-- Slider Section End -->

        </div>

        <!-- Slider Images Start -->
        <div class="slider-images">
            <div class="image" data-aos="fade-left" data-aos-delay="1000">
                <img src="<?php echo base_url(); ?>img/car.png" alt="Slider">
            </div>
        </div>
        <!-- Slider Images End -->

    </div>
    <!-- Slider Section End -->

</div>
<!-- Slider Section End -->

<!-- About Section Start -->
<div class="section section-padding-02">
    <div class="container">

        <!-- About Wrapper Start -->
        <div class="about-wrapper">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <!-- About Images Start -->
                    <div class="about-images">
                        <div class="images" data-aos="fade-right" data-aos-delay="200">
                            <img src="<?php echo base_url(); ?>img/bg-home.jpg" alt="About">
                        </div>
                    </div>
                    <!-- About Images End -->
                </div>
                <div class="col-lg-6">
                    <!-- About Content Start -->
                    <div class="about-content" data-aos="fade-left" data-aos-delay="200">

                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h5 class="sub-title">Selamat Datang Di <strong><?= $this->shop_info->get_shop_name(); ?></strong>.</h5>
                            <h2 class="main-title"> Dilengkapi peralatan terbaru dengan layanan yang oke.</h2>
                        </div>
                        <!-- Section Title End -->

                        <p>Kepuasan pelanggan adalah misi utama kami. </p>

                        <!-- About Count Start -->
                        <div class="about-count">
                            <!-- About Count Start -->
                            <div class="single-count">
                                <span class="count"><?= $this->transactions->get_count_transaction(); ?></span>
                                <p>Pengunjung</p>
                            </div>
                            <!-- About Count End -->
                            <!-- About Count Start -->
                            <div class="single-count">
                                <span class="count"><?= $this->products->get_count_products(); ?></span>
                                <p>Produk & layanan</p>
                            </div>
                            <!-- About Count End -->
                        </div>
                        <!-- About Count End -->

                        <a href="<?php echo base_url('contact'); ?>" class="btn btn-custom-01">Daftar sekarang</a>

                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
        <!-- About Wrapper End -->

    </div>
</div>
<!-- About Section End -->

<!-- Service Section Start -->
<div class="section ">
    <div class="container">
        <div class="section-padding-02 position-relative">

            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h5 class="sub-title">Services</h5>
                <h2 class="main-title">Kami menyediakan <br> beberapa layanan</h2>
            </div>
            <!-- Section Title End -->

            <!-- Service Wrapper Start -->
            <div class="service-wrapper">
                <div class="row gx-lg-5">
                    <?php
                    $products = $this->products->get_product();
                    foreach ($products as $product) {
                    ?>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Single Service Start -->
                            <div class="single-service" data-aos="fade-up" data-aos-delay="200">
                                <h4 class="title"><a><?= $product->name; ?></a></h4>
                                <a class="more">Rp. <?= $product->price; ?></a>

                                <div class="service-icon">
                                    <i class="fa fa-car"></i>
                                </div>
                            </div>
                            <!-- Single Service End -->
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- Service Wrapper End -->

        </div>
    </div>
</div>
<!-- Service Section End -->

<!-- Why Choose Section Start -->
<div class="section section-padding-02">
    <div class="container">

        <!-- Why Choose Wrapper Start -->
        <div class="choose-wrapper">
            <div class="row align-items-center gx-xl-0">
                <div class="col-lg-5">
                    <!-- Why Choose Content Start -->
                    <div class="choose-content" data-aos="fade-right" data-aos-delay="300">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h5 class="sub-title">Mengapa Memilih Kami?</h5>
                            <h2 class="main-title">Kepercayaan dan Kualitas Layanan adalah Prioritas.</h2>
                        </div>
                        <!-- Section Title End -->

                        <p>Menjadi yang dipercaya menjadi alasan kami untuk tetap menjaga kualitas layanan dan produk.</p>
                    </div>
                    <!-- Why Choose Content End -->
                </div>
                <div class="col-lg-7">
                    <!-- Why Choose Items Wrapper Start -->
                    <div class="choose-items-wrapper">
                        <div class="row gx-xl-5 align-items-center">
                            <div class="col-sm-6">

                                <!-- Single Choose Item Start -->
                                <div class="single-choose-item" data-aos="fade-up" data-aos-delay="200">
                                    <div class="item-icon">
                                        <img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/images/choose/icon-1.svg" alt="Icon">
                                    </div>
                                    <div class="item-content">
                                        <h4 class="title">Perangkat Terbaru</h4>
                                        <p>Menyediakan berbagai sparepart dan perangkat terbaru sesuai kebutuhan.</p>
                                    </div>
                                </div>
                                <!-- Single Choose Item End -->

                            </div>
                            <div class="col-sm-6">

                                <!-- Single Choose Item Start -->
                                <div class="single-choose-item" data-aos="fade-up" data-aos-delay="400">
                                    <div class="item-icon">
                                        <img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/images/choose/icon-3.svg" alt="Icon">
                                    </div>
                                    <div class="item-content">
                                        <h4 class="title">Mekanik handal</h4>
                                        <p>Mekanik-mekanik yang handal siap merawat/memperbaiki mobil anda.</p>
                                    </div>
                                </div>
                                <!-- Single Choose Item End -->

                            </div>
                            <div class="col-sm-6">

                                <!-- Single Choose Item Start -->
                                <div class="single-choose-item" data-aos="fade-up" data-aos-delay="200">
                                    <div class="item-icon">
                                        <img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/images/choose/icon-2.svg" alt="Icon">
                                    </div>
                                    <div class="item-content">
                                        <h4 class="title">Kualitas Terjaga</h4>
                                        <p>Memastikan setiap produk maupun layanan kami sesuai dengan standard dan original.</p>
                                    </div>
                                </div>
                                <!-- Single Choose Item End -->

                            </div>
                            <div class="col-sm-6">

                                <!-- Single Choose Item Start -->
                                <div class="single-choose-item" data-aos="fade-up" data-aos-delay="400">
                                    <div class="item-icon">
                                        <img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/images/choose/icon-4.svg" alt="Icon">
                                    </div>
                                    <div class="item-content">
                                        <h4 class="title">Cepat Tanggap</h4>
                                        <p>Kecepatan dan ketepatan menjadi faktor utama pelayanan kami. </p>
                                    </div>
                                </div>
                                <!-- Single Choose Item End -->

                            </div>
                        </div>
                    </div>
                    <!-- Why Choose Items Wrapper End -->
                </div>
            </div>
        </div>
        <!-- Why Choose Wrapper End -->

    </div>
</div>
<!-- Why Choose Section End -->

<!-- How We Work Section Start -->
<div class="section section-padding-02">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h5 class="sub-title">Proses layanan</h5>
            <h2 class="main-title">Bagaimana cara kerjanya? </h2>
        </div>
        <!-- Section Title End -->

        <!-- How we Work Wrapper Start -->
        <div class="how-we-work-wrapper">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Work Start -->
                    <div class="single-work" data-aos="fade-up" data-aos-delay="100">
                        <span class="number">01</span>
                        <div class="content-wrapper">
                            <img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/images/work/work-1.png" alt="Work">
                            <h4 class="title"><a>Service & Sparepart dipesan</a></h4>
                        </div>
                    </div>
                    <!-- Single Work End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Work Start -->
                    <div class="single-work" data-aos="fade-up" data-aos-delay="200">
                        <span class="number">02</span>
                        <div class="content-wrapper">
                            <img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/images/work/work-2.png" alt="Work">
                            <h4 class="title"><a>Mobil diantar ke garasi</a></h4>
                        </div>
                    </div>
                    <!-- Single Work End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Work Start -->
                    <div class="single-work" data-aos="fade-up" data-aos-delay="300">
                        <span class="number">03</span>
                        <div class="content-wrapper">
                            <img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/images/work/work-3.png" alt="Work">
                            <h4 class="title"><a>Perbaikan dan Perawatan</a></h4>
                        </div>
                    </div>
                    <!-- Single Work End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Work Start -->
                    <div class="single-work" data-aos="fade-up" data-aos-delay="400">
                        <span class="number">04</span>
                        <div class="content-wrapper">
                            <img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/images/work/work-4.png" alt="Work">
                            <h4 class="title"><a>Siap digunakan!</a></h4>
                        </div>
                    </div>
                    <!-- Single Work End -->
                </div>
            </div>
        </div>
        <!-- How we Work Wrapper End -->

    </div>
</div>
<!-- How We Work Section End -->

<!-- Testimonials Section Start -->
<div class="section section-padding-02">
    <div class="container">

        <!-- Testimonials Wrapper Start -->
        <div class="testimonials-wrapper">
            <!-- Testimonials Title Start -->
            <div class="testimonials-title">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h5 class="sub-title">Testimonials</h5>
                    <h2 class="main-title">Apa kata mereka tentang layanan kami?</h2>
                    <p>Mendengarkan langsung dari pelanggan kami mungkin memberikan anda sedikit gambaran tentang kami.</p>
                </div>
                <!-- Section Title End -->
            </div>
            <!-- Testimonials Title End -->

            <!-- Testimonials Items Start -->
            <div class="testimonials-items testimonial-active">

                <img class="shape" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/images/testimonials.png" alt="Testimonials">

                <img class="quote" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/images/quote.svg" alt="quote">

                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        $testimonials = $this->testimonies->get_testimonial();
                        foreach ($testimonials as $testimonial) {
                        ?>
                            <div class="swiper-slide">
                                <!-- Single Testimonials Start -->
                                <div class="single-testimonials">
                                    <h3 class="name"><?= $testimonial->name; ?></h3>
                                    <p><?= $testimonial->description; ?></p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <!-- Single Testimonials End -->
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="swiper-pagination"></div>

            </div>
            <!-- Testimonials Items End -->
        </div>
        <!-- Testimonials Wrapper End -->

    </div>
</div>
<!-- Testimonials Section End -->

<!-- Brand Section Start -->
<div class="section section-padding">
    <div class="container">
        <!-- Brand Wrapper Start -->
        <div class="brand-wrapper brand-active">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    // $products = $this->products->get_product();
                    foreach ($data as $r) {
                    ?>
                        <div class="swiper-slide">

                            <!-- Single Brand Start -->
                            <div class="single-brand">
                                <img src="<?php echo base_url(); ?>img/<?= $r->photo?>" alt="Brand">
                            </div>
                            <!-- Single Brand End -->

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Brand Wrapper End -->

    </div>
</div>
<!-- Brand Section End -->
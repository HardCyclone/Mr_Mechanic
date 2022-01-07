<!-- Header Section Start -->
<div class="section header-section">

    <!-- Header top Start -->
    <div class="header-top d-none d-lg-block">
        <div class="container">

            <!-- Header top Wrapper Start -->
            <div class="header-top-wrapper">

                <!-- Header top Wrapper Start -->
                <div class="header-top-info">
                    <p>Tanya - tanya langsung : <a href="https://api.whatsapp.com/send?phone=<?= $this->shop_info->get_shop_whatsapp(); ?>" target="_blank"><i class="fa fa-whatsapp mx-1"></i>Whatsapp Disini!</a></p>
                </div>
                <!-- Header top Wrapper End -->

                <!-- Header top Wrapper Start -->
                <div class="header-top-btn">
                    <?php if ($this->session->userdata('id_session') == '') {
                    ?>
                        <a href="<?php echo base_url('member/login') ?>">Login</a>
                        <a href="<?php echo base_url('member/register') ?>">Register</a>
                    <?php } else { ?>
                        <a href="<?php echo base_url('member/logout') ?>">Logout</a>
                    <?php } ?>
                </div>
                <!-- Header top Wrapper End -->

            </div>
            <!-- Header top Wrapper End -->

        </div>
    </div>
    <!-- Header top End -->

    <!-- Header Main Start -->
    <div class="header-main">
        <div class="container">

            <!-- Header Main Start -->
            <div class="header-main-wrapper">

                <!-- Header Logo Start -->
                <div class="header-logo">
                    <a href="<?php echo base_url('main'); ?>"><img src="<?php echo base_url(); ?>/img/<?= $this->shop_info->get_shop_logo(); ?>" alt="Logo"></a>
                </div>
                <!-- Header Logo End -->

                <!-- Header Menu Start -->
                <div class="primary-menu d-none d-lg-block">
                    <ul class="nav-menu">
                        <li><a href="<?php echo base_url('main'); ?>">Home</a></li>
                        <?php if ($this->session->userdata('id_session') == '') {
                        ?>
                        <?php } else { ?>
                            <li><a href="<?php echo base_url('member/dashboard'); ?>">My Profile</a></li>
                        <?php } ?>
                        <li>
                            <a href="<?php echo base_url('member/services'); ?>">Services</a>
                        </li>
                        <li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
                    </ul>

                </div>
                <!-- Header Menu End -->

                <!-- Header Meta Start -->
                <div class="header-meta">

                    <div class="meta-dropdown dropdown">
                        <?php if ($this->session->userdata('id_session') == '') {
                        ?>
                            <a type="button" class="toggle" href="<?php echo base_url('member/login'); ?>">
                                <i class="icofont-shopping-cart"></i>
                                <span class="count">0</span>
                            </a>
                        <?php } else { ?>
                            <a type="button" class="toggle" href="<?php echo base_url('cart'); ?>">
                                <i class="icofont-shopping-cart"></i>
                                <span class="count">
                                    <?php

                                    if ($count->total == null) {
                                        echo "0";
                                    } else {
                                        echo $count->total;
                                    }
                                    ?>
                                </span>
                            </a>
                        <?php } ?>
                    </div>

                    <div class="header-toggle d-lg-none">
                        <button class="menu-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>

                </div>
                <!-- Header Meta End -->

            </div>
            <!-- Header Main End -->

        </div>
    </div>
    <!-- Header Main End -->

</div>
<!-- Header Section End -->

<!-- Mobile Menu Start -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample">

    <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">

        <!-- Header top Info Start -->
        <div class="header-top-info">
            <p><?= $this->shop_info->get_shop_address(); ?></p>
            <p>Tanya - tanya langsung : <a href="https://api.whatsapp.com/send?phone=<?= $this->shop_info->get_shop_whatsapp(); ?>" target="_blank"><i class="fa fa-whatsapp mx-1"></i>Whatsapp Disini!</a></p>
        </div>
        <!-- Header top Info End -->

        <!-- Header top Button Start -->
        <div class="header-top-btn">
            <?php if ($this->session->userdata('id_session') == '') {
            ?>
                <a href="<?php echo base_url('member/login') ?>">Login</a>
                <a href="<?php echo base_url('member/register') ?>">Register</a>
            <?php } else { ?>
            <?php } ?>
        </div>
        <!-- Header top Button End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu-items">
            <ul class="nav-menu">
                <li><a href="<?php echo base_url('main'); ?>">Home</a></li>
                <?php if ($this->session->userdata('id_session') == '') {
                ?>
                <?php } else { ?>
                    <li><a href="<?php echo base_url('member/dashboard'); ?>">My Profile</a></li>
                <?php } ?>
                <li>
                    <a href="<?php echo base_url('member/services'); ?>">Services</a>
                </li>
                <li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
            </ul>

        </div>
        <!-- Mobile Menu End -->

    </div>
</div>
<!-- Mobile Menu End -->
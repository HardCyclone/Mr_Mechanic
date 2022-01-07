<!-- Login & Register Section Start -->
<div class="section section-padding no-banner">
    <div class="container">

        <!-- Register & Login Wrapper Start -->
        <div class="register-login-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-5">

                    <!-- Register & Login Form Start -->
                    <div class="register-login-form">
                        <h3 class="title">Email <span>Sent</span></h3>
                        <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
                            <?php
                            if ($this->session->flashdata('success_register') != '') {
                                echo '<div class="alert alert-success text-center" role="alert">';
                                echo $this->session->flashdata('success_register');
                                echo '</div>';
                            } else if ($this->session->flashdata('login_failed') != '') {
                                echo '<div class="alert alert-danger text-center" role="alert">';
                                echo $this->session->flashdata('login_failed');
                                echo '</div>';
                            } else if ($this->session->flashdata('success_reset') != '') {
                                echo '<div class="alert alert-success text-center" role="alert">';
                                echo $this->session->flashdata('success_reset');
                                echo '</div>';
                            }
                            ?>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 mx-auto text-center">
                            <?php
                            if ($this->session->flashdata('link_sent') != '') {
                                echo '<div class="alert alert-success text-center" role="alert">';
                                echo $this->session->flashdata('link_sent');
                                echo '</div>';
                            } else if ($this->session->flashdata('failed_sent') != '') {
                                echo '<div class="alert alert-danger text-center" role="alert">';
                                echo $this->session->flashdata('failed_sent');
                                echo '</div>';
                            }
                            ?>                            
                            <a class="" href="<?php echo base_url('member/login');?>">Kembali ke halaman login.</a>
                        </div>

                    </div>
                    <!-- Register & Login Form End -->

                </div>
            </div>
        </div>
        <!-- Register & Login Wrapper End -->

    </div>
</div>
<!-- Login & Register Section End -->
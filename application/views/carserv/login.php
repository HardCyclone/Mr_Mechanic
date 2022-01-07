<!-- Login & Register Section Start -->
<div class="section section-padding no-banner">
    <div class="container">

        <!-- Register & Login Wrapper Start -->
        <div class="register-login-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-5">

                    <!-- Register & Login Form Start -->
                    <div class="register-login-form">
                        <h3 class="title">Login <span>Now</span></h3>
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
                        <div class="form-wrapper">
                            <form id="form_login" action="<?php echo base_url('member/auth'); ?>" method="post" enctype="multipart/form-data">
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="email" name="email" id="email" placeholder="Username or Email" autocomplete="new-email" required>
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="password" name="password" id="password" placeholder="Password" autocomplete="new-password" required>
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form mt-5">
                                    <button class="btn btn-custom-01 w-100" id="simpan" type="submit">Login</button>
                                </div>
                            </form>

                            <!-- Single Form End -->
                            <p><a href="<?php echo base_url('member/forgot'); ?>">Lupa Password?</a></p>
                            <p>Belum memiliki akun, <a href="<?php echo base_url('member/register'); ?>">Buat disini.</a></p>
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
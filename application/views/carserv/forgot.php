<!-- Login & Register Section Start -->
<div class="section section-padding no-banner">
    <div class="container">

        <!-- Register & Login Wrapper Start -->
        <div class="register-login-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-5">

                    <!-- Register & Login Form Start -->
                    <div class="register-login-form">
                        <h3 class="title">Request <span>Reset Password</span></h3>
                        <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
                            <?php
                            if ($this->session->flashdata('link_sent') != '') {
                                echo '<div class="alert alert-success text-center" role="alert">';
                                echo $this->session->flashdata('link_sent');
                                echo '</div>';
                            } else if ($this->session->flashdata('email_notexist') != '') {
                                echo '<div class="alert alert-danger text-center" role="alert">';
                                echo $this->session->flashdata('email_notexist');
                                echo '</div>';
                            }
                            ?>
                        </div>
                        <div class="form-wrapper">
                            <form id="form_forgot" autocomplete="off" action="<?php echo base_url('member/forgot'); ?>" method="post" enctype="multipart/form-data">
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="email" name="email" class="form-control" id="email" autocomplete="new-email" placeholder="Masukkan Alamat Email" required>
                                </div>
                                <!-- Single Form End -->
                                <div class="single-form mt-5">
                                    <button class="btn btn-custom-01 w-100" id="simpan" type="submit">Submit</button>
                                </div>
                                <p>Belum memiliki akun, <a href="<?php echo base_url('member/register'); ?>">Buat disini.</a></p>
                            </form>
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
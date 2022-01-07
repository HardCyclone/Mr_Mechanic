<!-- Login & Register Section Start -->
<div class="section section-padding no-banner">
    <div class="container">

        <!-- Register & Login Wrapper Start -->
        <div class="register-login-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-5">

                    <!-- Register & Login Form Start -->
                    <div class="register-login-form">
                        <h3 class="title">Reset <span>Password</span></h3>
                        <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
                            <?php
                            if ($this->session->flashdata('success_register') != '') {
                                echo '<div class="alert alert-success text-center" role="alert">';
                                echo $this->session->flashdata('success_register');
                                echo '</div>';
                            } else if ($this->session->flashdata('failed') != '') {
                                echo '<div class="alert alert-danger text-center" role="alert">';
                                echo $this->session->flashdata('failed');
                                echo '</div>';
                            } else if ($this->session->flashdata('success_reset') != '') {
                                echo '<div class="alert alert-success text-center" role="alert">';
                                echo $this->session->flashdata('success_reset');
                                echo '</div>';
                            }
                            ?>
                        </div>
                        <div class="form-wrapper">
                            <form id="form_reset_password" autocomplete="off" action="<?php echo site_url() . 'member/reset/' . $this->uri->segment(3) ?>" method="post" enctype="multipart/form-data">
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="password" name="password" class="form-control" id="password" autocomplete="new-password" placeholder="Masukkan Password" required>
                                    <input type="hidden" name="id_session" value='<?php echo $this->session->id_session; ?>'>
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form mt-5">
                                    <button class="btn btn-custom-01 w-100">Update</button>
                                </div>
                                <!-- Single Form End -->
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
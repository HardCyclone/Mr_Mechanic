<!-- Login & Register Section Start -->
<div class="section section-padding no-banner">
    <div class="container">

        <!-- Register & Login Wrapper Start -->
        <div class="register-login-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-5">
                    <!-- Register & Login Form Start -->
                    <div class="register-login-form">
                        <h3 class="title">Registration <span>Now</span></h3>
                        <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
                            <?php
                            if ($this->session->flashdata('success_register') != '') {
                                echo '<div class="alert alert-success text-center" role="alert">';
                                echo $this->session->flashdata('success_register');
                                echo '</div>';
                            } else if ($this->session->flashdata('failed_register') != '') {
                                echo '<div class="alert alert-danger text-center" role="alert">';
                                echo $this->session->flashdata('failed_register');
                                echo '</div>';
                            } else if ($this->session->flashdata('email_notexist') != '') {
                                echo '<div class="alert alert-danger text-center" role="alert">';
                                echo $this->session->flashdata('email_notexist');
                                echo '</div>';
                            }
                            ?>
                        </div>
                        <div class="form-wrapper">
                            <form id="form_register" action="<?php echo base_url('member/simpan_register'); ?>" method="post" enctype="multipart/form-data">

                                <div class="single-form">
                                    <input type="text" name="nmlgkp" class="form-control" id="nmlgkp" placeholder="Masukkan Nama Lengkap" required>
                                </div>

                                <div class="single-form">
                                    <input type="text" name="almtlgkp" class="form-control" id="almtlgkp" placeholder="Masukkan Alamat Lengkap" required>
                                </div>

                                <div class="single-form">
                                    <input type="text" name="nohp" class="form-control" id="nohp" placeholder="Masukkan No HP / No Whatsapp" required>
                                </div>

                                <div class="single-form">
                                    <input type="email" name="email" class="form-control" id="email" autocomplete="new-email" placeholder="Masukkan Alamat Email" required>
                                </div>

                                <div class="single-form">
                                    <input type="password" name="password" class="form-control" id="password" autocomplete="new-password" placeholder="Masukkan Password" required>
                                </div>

                                <div class="single-form">
                                    <input type="text" name="tmplhr" class="form-control" id="tmplhr" placeholder="Masukkan Tempat Lahir" required>
                                </div>

                                <div class="single-form">
                                    <input type="date" name="tgllhr" class="form-control" id="tgllhr" placeholder="Masukkan Tanggal Lahir" required>
                                </div>

                                <button type="submit" class="btn btn-custom-02 mt-5 w-100" id="simpan">Submit</button>
                                <p>Sudah punya akun? <a href="<?php echo base_url('member/login'); ?>">Login Disini!</a></p>
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
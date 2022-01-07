<!-- My Account Section Start -->
<div class="section section-padding no-banner">
    <div class="container">

        <!-- My Account Wrapper Start -->
        <div class="my-account-wrapper">

            <div class="row">
                <div class="col-xl-3 col-md-4">
                    <!-- My Account Menu Start -->
                    <div class="my-account-menu">
                        <ul class="nav account-menu-list flex-column">
                            <li>
                                <a class="active" data-bs-toggle="pill" href="#pills-dashboard"><i class="fa fa-tachometer"></i> Dashboard</a>
                            </li>
                            <li>
                                <a data-bs-toggle="pill" href="#pills-order"><i class="fa fa-shopping-cart"></i> Order</a>
                            </li>
                            <li>
                                <a data-bs-toggle="pill" href="#pills-account"><i class="fa fa-user"></i> Account Details</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('member/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                    <!-- My Account Menu End -->
                </div>
                <div class="col-xl-9 col-md-8">
                    <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
                        <?php
                        if ($this->session->flashdata('success_profile') != '') {
                            echo '<div class="alert alert-success text-center" role="alert">';
                            echo $this->session->flashdata('success_profile');
                            echo '</div>';
                        } else if ($this->session->flashdata('failed_profile') != '') {
                            echo '<div class="alert alert-danger text-center" role="alert">';
                            echo $this->session->flashdata('failed_profile');
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <!-- Tab content start -->
                    <div class="tab-content my-account-tab">

                        <div class="tab-pane fade show active" id="pills-dashboard">
                            <!-- My Account Dashboard start -->
                            <div class="my-account-dashboard account-wrapper">
                                <h4 class="account-title">Halo, <?php echo $data['register_nmlgkp']; ?></h4>
                                <p>Selamat datang di dashboard kamu, <br>untuk melihat pesanan bisa cek di menu Orders, ubah profile kamu di Account Details.</p>
                            </div>
                            <!-- My Account Dashboard End -->
                        </div>

                        <div class="tab-pane fade" id="pills-order">
                            <!-- My Account Order Start -->
                            <div class="my-account-order account-wrapper">
                                <h4 class="account-title">Orders</h4>
                                <div class="account-table text-center table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="no">No</th>
                                                <th class="name">Nama Produk/Service</th>
                                                <th class="date">Tanggal Pemesanan</th>
                                                <th class="status">Status</th>
                                                <th class="total">Total</th>
                                                <th class="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($orders as $order) : ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td>
                                                        <?php
                                                        $id = $order->id;
                                                        $detail = $this->cart_model->get_detail($id)->result();
                                                        foreach ($detail as $d) :
                                                            echo $d->name . ' (' . $d->qty . 'x' . $d->price . ')<br>';
                                                        ?>
                                                        <?php endforeach; ?>
                                                    </td>
                                                    <td><?php echo $order->order_date; ?></td>
                                                    <td>
                                                        <?php if ($order->status == 'Menunggu Pembayaran') { ?>
                                                            <div class="status-pending"><?php echo $order->status; ?></div>
                                                        <?php } else if ($order->status == 'Dalam review') { ?>
                                                            <div class="status-review"><?php echo $order->status; ?></div>
                                                        <?php } else if ($order->status == 'Lunas') { ?>
                                                            <div class="status-success"><?php echo $order->status; ?></div>
                                                        <?php } else { ?>
                                                            <div class="status-failed"><?php echo $order->status; ?></div>
                                                        <?php } ?>
                                                    </td>
                                                    <td>Rp. <?php echo number_format($order->total, 0, ',', '.') ?></td>
                                                    <td>
                                                        <?php if ($order->status == 'Menunggu Pembayaran') { ?>
                                                            <a data-bs-tooltip="tooltip" data-bs-placement="top" title="Konfirmasi Pembayaran" data-bs-toggle="modal" data-bs-target="#quickview<?= $order->id; ?>"><i class="icofont-edit"></i></a>
                                                        <?php } else { ?>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- My Account Order End -->
                        </div>

                        <div class="tab-pane fade" id="pills-account">
                            <!-- My Account Details End -->
                            <div class="my-account-details account-wrapper">
                                <h4 class="account-title">Account Details</h4>
                                <form id="form_profile" action="<?php echo base_url('member/simpan_profile'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="account-details">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <label class="form-label">Nama Lengkap</label>
                                                    <input type="hidden" name="kode" id="kode" value="<?php echo $data['register_id']; ?>" required>
                                                    <input type="text" name="nmlgkp" class="form-validate" id="nmlgkp" placeholder="Masukkan Nama Lengkap" value="<?php echo $data['register_nmlgkp']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <label class="form-label">Nomor HP/Whatsapp</label>
                                                    <input type="text" name="nohp" class="form-validate" id="nohp" placeholder="Masukkan No HP / No Whatsapp" value="<?php echo $data['register_nohp']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <label class="form-label">Alamat Lengkap</label>
                                                    <textarea type="text" name="almtlgkp" rows="3" class="form-validate" id="almtlgkp" placeholder="Masukkan Alamat Lengkap" value="<?php echo $data['register_almtlgkp']; ?>" required><?php echo $data['register_almtlgkp']; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <label class="form-label">Email address</label>
                                                    <p><?php echo $data['register_email']; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <label class="form-label">Tempat Lahir</label>
                                                    <input type="text" name="tmplhr" rows="3" class="form-validate" id="tmplhr" placeholder="Masukkan Tempat Lahir" value="<?php echo $data['register_tmplhr']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <label class="form-label">Tanggal Lahir</label>
                                                    <input type="date" name="tgllhr" rows="3" class="form-validate" id="tgllhr" placeholder="Masukkan Tanggal Lahir" value="<?php echo $data['register_tgllhr']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <h5 class="title">Password change</h5>
                                                </div>
                                            </div>
                                            <input type="hidden" name="password" id="cpassword" value="<?php echo $data['register_password']; ?>" required>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <label class="form-label">New Password</label>
                                                    <input type="password" name="password" class="form-validate" id="password" autocomplete="new-password" placeholder="Masukkan Password" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <button class="btn btn-primary btn-hover-dark" id="simpan" type="submit">Save Change</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- My Account Details End -->
                        </div>
                    </div>
                    <!-- Tab content End -->
                </div>
            </div>

        </div>
        <!-- My Account Wrapper End -->

    </div>
</div>
<!-- My Account Section End -->

<!-- Quick View -->
<?php
foreach ($orders as $order) {
?>
    <div class="modal fade" id="quickview<?= $order->id; ?>">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal Body  -->
                <div class="modal-body">

                    <div class="row gx-lg-0">
                        <div class="my-account-details mt-2">
                            <h4 class="account-title">Konfirmasi Pembayaran</h4>
                            <form id="form_confirmation" class="form-confirmation" action="<?php echo base_url('cart/confirm'); ?>" method="post" enctype="multipart/form-data">
                                <div class="account-details">
                                    <div class="row">
                                        <input type="hidden" name="kode" id="kode" value="<?= $order->id; ?>" required>
                                        <div class="col-md-6">
                                            <label for="foto" class="col-sm-6 d-flex mb-2 mt-4">Bukti transfer</label>
                                            <div class="over-hidden">
                                                <label class="custom-file" id="customFile">
                                                    <input type="file" name="xfoto" accept="image/png, image/jpg, image/jpeg" class="custom-file-input" id="exampleInputFile" aria-describedby="fileHelp">
                                                    <span class="custom-file-control form-control-file"></span>
                                                </label>
                                                <label class="mt-2">
                                                    *file harus bertype jpg|png|jpeg
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label mb-2 mt-4">Tanggal Transfer</label>
                                            <div class="single-form over-hidden mt-0 pt-1">
                                                <input type="date" name="tgltransfer" rows="3" class="form-validate" id="tgltransfer" placeholder="Masukkan Tanggal Transfer" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <button class="btn btn-primary btn-hover-dark" id="simpan" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- Modal Body End -->

            </div>
        </div>
    </div>
    <!-- Quick View -->
<?php } ?>
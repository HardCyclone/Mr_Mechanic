<!-- Checkout Section Start -->
<div class="section section-padding no-banner">
    <div class="container">

        <!-- Checkout Wrapper Start -->
        <div class="checkout-wrapper">

            <form id="form_checkout" action="<?php echo base_url('cart/order'); ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-7">
                        <!-- Checkout Form Start -->
                        <div class="checkout-form">
                            <div class="checkout-title">
                                <h4 class="title">Billing details</h4>
                            </div>


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
                                            <label class="form-label">Alamat Penerima</label>
                                            <textarea type="text" name="almtlgkp" rows="3" class="form-validate" id="almtlgkp" placeholder="Masukkan Alamat Lengkap" value="<?php echo $data['register_almtlgkp']; ?>" required><?php echo $data['register_almtlgkp']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <label class="form-label">Email address</label>
                                            <input type="hidden" name="email" id="email" value="<?php echo $data['register_email']; ?>" required>
                                            <p><?php echo $data['register_email']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form checkout-note">
                                            <label class="form-label">Keterangan</label>
                                            <textarea name="notes" class="form-validate" placeholder="Keterangan tentang pesanan anda, contoh: merk kendaraan." required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- Checkout Form End -->
                    </div>
                    <div class="col-lg-5">
                        <div class="checkout-order">
                            <div class="checkout-title">
                                <h4 class="title">Pesanan Anda</h4>
                            </div>

                            <div class="checkout-order-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="Product-name">Product</th>
                                            <th class="Product-price">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($datas as $items) : ?>
                                            <tr>
                                                <td class="Product-name">
                                                    <p><?php echo $items->name; ?> × <?php echo $items->qty; ?></p>
                                                    <input type="hidden" name="produk" id="produk" value="<?php echo $items->name; ?>" required>
                                                    <input type="hidden" name="qty" id="qty" value="<?php echo $items->qty; ?>" required>
                                                    <input type="hidden" name="photo" id="photo" value="<?php echo $items->photo; ?>" required>
                                                </td>
                                                <td class="Product-price">
                                                    <p>Rp. <?php echo number_format($items->price, 0, ',', '.') ?></p>
                                                    <input type="hidden" name="price" id="price" value="<?php echo $items->price; ?>" required>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="Product-name">
                                                <p>Subtotal</p>
                                            </td>
                                            <td class="Product-price">
                                                <p>Rp. <?php echo number_format($items->subtotal, 0, ',', '.') ?></p>
                                                <input type="hidden" name="subtotal" id="subtotal" value="<?php echo $items->subtotal; ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="Product-name">
                                                <p>Total</p>
                                            </td>
                                            <td class="total-price">
                                                <p>Rp. <?php echo number_format($totals->subtotal, 0, ',', '.') ?></p>
                                                <input type="hidden" name="total" id="total" value="<?php echo $totals->subtotal; ?>" required>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="checkout-payment">
                                <ul>
                                    <li>
                                        <div class="single-payment">
                                            <div class="payment-details">
                                                <p>Silahkan melakukan pembayaran sejumlah : <br><span class="payment-important">Rp. <?php echo number_format($totals->subtotal, 0, ',', '.') ?></span> ke rekening kami</p>
                                                <p class="payment-bold mt-3">Bank <?php echo $this->shop_info->get_shop_bank(); ?> : <?php echo $this->shop_info->get_shop_bankno(); ?></p>
                                                <p class="payment-bold">a.n. <?php echo $this->shop_info->get_shop_bankaccount(); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="checkout-btn">
                                    <button type="submit" id="simpan" class="btn btn-primary btn-hover-dark w-100" >Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <!-- Checkout Wrapper End -->

    </div>
</div>
<!-- Checkout Section End -->
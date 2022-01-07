<!-- Shop Section Start -->
<div class="section section-padding no-banner">
    <div class="container">

        <!-- Shop Wrapper Start -->
        <div class="shop-wrapper">
            <div class="row">
                <?php
                $products = $this->products->get_product();
                foreach ($products as $product) {
                ?>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Single Product Start -->
                        <div class="single-product" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-image">

                                <img src="<?php echo base_url(); ?>/img/<?= $product->photo; ?>" alt="Product">
                                <?php if ($product->stock == 0) { ?>
                                    <div class="unavailable">Tidak Tersedia</div>
                                <?php } else { ?>
                                    <?php if ($this->session->userdata('id_session') == '') {
                                    ?>
                                        <ul class="product-action">
                                            <li><a href="<?php echo site_url('member/login'); ?>" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart"><i class="icofont-shopping-cart"></i></a></li>
                                            <li><a data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#quickview<?= $product->id; ?>"><i class="icofont-eye"></i></a></li>
                                        </ul>
                                    <?php } else { ?>
                                        <?php
                                        $idregister = $this->session->userdata('id_member');
                                        $cek = $this->cart_model->check($idregister, $product->id);
                                        if (count($cek) == 1) {
                                            $newstock = ($product->stock) - $cek->qty;
                                        ?>
                                            <?php if ($newstock == 0) { ?>
                                                <div class="unavailable">Tidak Tersedia</div>
                                            <?php } else { ?>
                                                <ul class="product-action">
                                                    <li>
                                                        <form action="<?php echo site_url('cart/add/' . $product->id); ?>" method="post">
                                                            <input type="hidden" name="qty" value="1" />
                                                            <button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart"><i class="icofont-shopping-cart"></i></button>
                                                        </form>
                                                    </li>
                                                    <li><a data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#quickview<?= $product->id; ?>"><i class="icofont-eye"></i></a></li>
                                                </ul>
                                            <?php }
                                        } else { ?>
                                            <ul class="product-action">
                                                <li>
                                                    <form action="<?php echo site_url('cart/add/' . $product->id); ?>" method="post">
                                                        <input type="hidden" name="qty" value="1" />
                                                        <button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart"><i class="icofont-shopping-cart"></i></button>
                                                    </form>
                                                </li>
                                                <li><a data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#quickview<?= $product->id; ?>"><i class="icofont-eye"></i></a></li>
                                            </ul>
                                <?php }
                                    }
                                } ?>
                            </div>
                            <div class="product-content">
                                <h3 class="name"><?= $product->name; ?></h3>
                                <div class="price">
                                    <span class="sale-price">Rp. <?= $product->price; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- Shop Wrapper End -->

    </div>
</div>
<!-- Shop Section End -->

<!-- Quick View -->
<?php
$products = $this->products->get_product();
foreach ($products as $product) {
?>
    <div class="modal fade" id="quickview<?= $product->id; ?>">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal Body  -->
                <div class="modal-body">

                    <div class="row gx-lg-0">
                        <div class="col-md-5">
                            <!-- Product Quick View Image Start -->
                            <div class="product-quickview-image product-quickview-active">

                                <img src="<?php echo base_url(); ?>/img/<?= $product->photo; ?>" alt="Product">

                            </div>
                            <!-- Product Quick View Image End -->
                        </div>
                        <div class="col-md-7">
                            <!-- Product Quick View Content Start -->
                            <div class="product-quickview-content">
                                <h3 class="title"><?= $product->name; ?></h3>

                                <div class="price-rating">
                                    <div class="price">
                                        <span class="sale-price">Rp. <?= $product->price; ?></span>
                                    </div>
                                </div>

                                <?php
                                if ($product->type == 'sparepart') {
                                    $idregister = $this->session->userdata('id_member');
                                    $cek = $this->cart_model->check($idregister, $product->id);
                                    if (count($cek) == 1) {
                                ?>
                                        <div class="product-label">
                                            <div class="single-label">
                                                <p>Stock: <?= ($product->stock) - $cek->qty; ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="product-label">
                                            <div class="single-label">
                                                <p>Stock: <?= $product->stock; ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php }
                                } else { ?>
                                    <div class="product-label">
                                        <div class="single-label">
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($product->stock == 0) { ?>
                                    <div class="unavailable">Tidak Tersedia</div>
                                <?php } else { ?>
                                    <form action="<?php echo site_url('cart/add/' . $product->id); ?>" method="post">
                                        <div class="product-quantity-action">
                                            <div class="product-quantity d-inline-flex">
                                                <button type="button" class="sub">-</button>
                                                <?php
                                                $idregister = $this->session->userdata('id_member');
                                                $cek = $this->cart_model->check($idregister, $product->id);
                                                if (count($cek) == 1) {
                                                ?>
                                                    <input type="text" value="0" min="0" max="<?= ($product->stock) - $cek->qty; ?>" name="qty" />
                                                <?php } else { ?>
                                                    <input type="text" value="0" min="0" max="<?= $product->stock; ?>" name="qty" />
                                                <?php } ?>
                                                <button type="button" class="add">+</button>
                                            </div>
                                            <ul class="product-action">
                                                <?php if ($this->session->userdata('id_session') == '') {
                                                ?>
                                                    <li><a type="submit" href="<?php echo site_url('member/login'); ?>" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart"><i class="icofont-shopping-cart"></i></a></li>
                                                <?php } else { ?>
                                                    <li>
                                                        <?php
                                                        $idregister = $this->session->userdata('id_member');
                                                        $cek = $this->cart_model->check($idregister, $product->id);
                                                        if (count($cek) == 1) {
                                                            $newstock = ($product->stock) - $cek->qty;
                                                        ?>
                                                            <?php if ($newstock == 0) { ?>
                                                            <?php } else { ?>
                                                                <button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart"><i class="icofont-shopping-cart"></i></button>
                                                            <?php }
                                                        } else { ?>
                                                            <button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart"><i class="icofont-shopping-cart"></i></button>
                                                        <?php } ?>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </form>
                                <?php } ?>
                                <div class="product-categories-tags">
                                    <div class="product-tags">
                                        <span class="label">Category :</span>
                                        <ul>
                                            <li><a><?= $product->type; ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Quick View Content End -->
                        </div>
                    </div>
                </div>
                <!-- Modal Body End -->

            </div>
        </div>
    </div>
    <!-- Quick View -->
<?php } ?>
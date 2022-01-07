<!-- Cart Section Start -->
<div class="section section-padding no-banner">
    <div class="container">

        <!-- Cart Wrapper Start -->
        <div class="cart-wrapper">
            <!-- Cart Table Start -->
            <div class="cart-table table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="Product-thumb">Foto</th>
                            <th class="Product-info">Nama Produk/Service</th>
                            <th class="Product-quantity">Quantity</th>
                            <th class="Product-total-price">Harga Total</th>
                            <th class="Product-action">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($datas as $items) : ?>
                            <tr>
                                <td class="Product-thumb">
                                    <img src="<?php echo base_url(); ?>img/<?php echo $items->photo; ?>" alt="Cart">
                                </td>
                                <td class="Product-info">
                                    <h6 class="name"><a><?php echo $items->name; ?></a></h6>
                                    <div class="product-prices">
                                        <span class="sale-price">Rp. <?php echo number_format($items->price, 0, ',', '.') ?></span>
                                    </div>
                                </td>
                                <td class="quantity">
                                    <?php echo $items->qty ?>
                                </td>
                                <td class="Product-total-price">
                                    <span class="price">Rp. <?php echo number_format($items->subtotal, 0, ',', '.') ?></span>
                                </td>
                                <td class="Product-action">
                                    <a href="<?php echo base_url() . 'cart/delete_item/' . $items->id; ?>" type="button" class="remove"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- Cart Table End -->

            <div class="cart-btn">
                <div class="col-lg-6">

                    <div class="cart-totals">
                        <div class="cart-title">
                            <h4 class="title">Cart totals</h4>
                        </div>
                        <div class="cart-total-table">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="value">Total</p>
                                        </td>
                                        <td>
                                            <p class="price">Rp. <?php echo number_format($totals->subtotal, 0, ',', '.') ?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cart btn Start -->
            <div class="cart-btn d-flex flex-wrap justify-content-between align-items-end">
                <div class="left-btn">
                    <a href="<?php echo base_url('member/services') ?>" class="btn btn-dark btn-hover-primary">Continue Shopping</a>
                </div>
                <div class="right-btn">
                    <a href="<?php echo base_url('cart/delete') ?>" class="btn btn-outline-dark">Clear Cart</a>
                    <a href="<?php echo base_url('cart/checkout') ?>" class="btn btn-outline-dark">Checkout</a>
                </div>
            </div>
            <!-- Cart btn Start -->
        </div>
        <!-- Cart Wrapper End -->


    </div>
</div>
<!-- Cart Section End -->
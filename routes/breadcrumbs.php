<?php

// Landing
Breadcrumbs::for('landing.index', function ($trail) {
    $trail->push('Halaman Utama', route('landing.index'));
});

// landing.index > shop.index
Breadcrumbs::for('shop.index', function ($trail) {
    $trail->parent('landing.index');
    $trail->push('Daftar Produk', route('shop.index'));
});

// landing.index > shop.index > shop.show
Breadcrumbs::for('shop.show', function ($trail, $product) {
    $trail->parent('shop.index');
    $trail->push( $product->name , route('shop.show', $product->slug));
});

// landing.index > cart.index
Breadcrumbs::for('cart.index', function ($trail) {
    $trail->parent('landing.index');
    $trail->push('Keranjang saya', route('cart.index'));
});

// landing.index > cart.index > checkout.index
Breadcrumbs::for('checkout.index', function ($trail) {
    $trail->parent('cart.index');
    $trail->push('Pembayaran', route('checkout.index'));
});

// landing.index > cart.index > checkout.index > checkout.dropboxPayment
Breadcrumbs::for('checkout.dropboxPayment', function ($trail) {
    $trail->parent('checkout.index');
    $trail->push('Upload bukti pembayaran', route('checkout.dropboxPayment'));
});

// landing.index > user.show
Breadcrumbs::for('user.show', function ($trail, $user) {
    $trail->parent('landing.index');
    $trail->push('Nama User', route('user.show', 1));
});

// landing.index > user.status
Breadcrumbs::for('user.status', function ($trail, $user) {
    $trail->parent('user.show', 1);
    $trail->push('Pesanan Saya', route('user.status'));
});

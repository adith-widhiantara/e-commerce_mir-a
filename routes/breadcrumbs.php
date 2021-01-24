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
Breadcrumbs::for('checkout.dropboxPayment', function ($trail, $cart) {
    $trail->parent('checkout.index');
    $trail->push('Upload bukti pembayaran', route('checkout.dropboxPayment', $cart -> id));
});

// landing.index > user.index
Breadcrumbs::for('user.index', function ($trail, $user) {
    $trail->parent('landing.index');
    $trail->push($user->name, route('user.index'));
});

// landing.index > user.status
Breadcrumbs::for('user.status', function ($trail, $user) {
    $trail->parent('user.index', $user);
    $trail->push('Pesanan Saya', route('user.status'));
});

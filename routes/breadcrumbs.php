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
    $trail->push('Nama Produk', route('shop.show', 1));
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

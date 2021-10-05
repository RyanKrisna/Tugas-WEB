<?php
    switch (@$_GET['mod']) {
        case 'pemesanan':
            $page= 'frontpage/pemesanan.php';
            break;
        case 'produk':
            $page= 'frontpage/produk.php';
            break;
        default:
            $page= 'frontpage/beranda.php';
            break;
    }
    include 'template.php';
?>
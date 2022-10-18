<?php

if ( $_POST['username'] == 'admin' ) {
    echo 'Username BENAR';
    if ( $_POST['password'] == 'rahasia' ) {
        echo 'Password BENAR';
        echo 'BERHASIL LOGIN';
    } else {
        echo 'Password SALAH';
        echo 'COBA LAGI';
    }
} else {
    echo 'Username SALAH';
}

/**
 * TUGAS
 * 
 * Buatlah validasi password
 * jika password bernilai 'admin'
 * munculkan pesan 'Password Benar'
 * jika bukan
 * munculkan pesan 'Password Salah'
 */

/**
 * JIKA Username DAN Password BENAR
 * Munculkan pesan : Berhasil Login
 * Selain itu, munculkan pesan : Coba Lagi
 */

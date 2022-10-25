<?php

/**
 * cek apakah script diakses secara langsung
 * file cek.php hanya boleh diakses dari login.php
 */
if ( isset( $_POST['username'] ) ) {

    // mendefinisikan username dan password yang benar
    $username = 'siswa';
    $password = 'siswa';

    /**
     * INPUT User ID harus 'siswa'
     * INPUT Password harus 'siswa'
     */
    if ( $_POST['username'] == $username ) {
        echo 'username BENAR';
        if ( $_POST['password'] == $password ) {
            echo 'Password BENAR';
        } else {
            echo 'Password SALAH';
        }
    } else {
        echo 'username SALAH';
    }
} else {
    echo 'HARUS LEWAT LOGIN!';
}

/**
 * $_POST : untuk membaca kiriman data dari form menggunakan POST
 */

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

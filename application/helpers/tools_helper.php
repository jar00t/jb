<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    if (!function_exists('howmuach')) {
        function howmuach($var1 = 0, $var2 = 0) {
            if ($var1 > $var2) {
                return 'lebih banyak dari';
            } elseif ($var1 < $var2) {
                return 'lebih sedikit dari';
            } else {
                return 'sama dengan';
            }
        }
    }
<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    if (!function_exists('active_menu')) {
        function active_menu($menu = '', $page = array(), $tree = 0, $aclass = '', $dclass = '') {
            if (array_key_exists($tree, $page) === TRUE && $menu === $page[$tree]) {
                return $aclass . 'active';
            } else {
                return $dclass . '';
            }
        }
    }
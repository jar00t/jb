<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	if (MB_ENABLED === TRUE) {
		return;
	}
	if ( ! function_exists('mb_strlen')) {
		function mb_strlen($str, $encoding = NULL) {
			if (ICONV_ENABLED === TRUE) {
				return iconv_strlen($str, isset($encoding) ? $encoding : config_item('charset'));
			}
			log_message('debug', 'Kesesuaian (mbstring): iconv_strlen() tidak ada, kembali ke strlen().');
			return strlen($str);
		}
	}
	if ( ! function_exists('mb_strpos')) {
		function mb_strpos($haystack, $needle, $offset = 0, $encoding = NULL) {
			if (ICONV_ENABLED === TRUE) {
				return iconv_strpos($haystack, $needle, $offset, isset($encoding) ? $encoding : config_item('charset'));
			}
			log_message('debug', 'Kesesuaian (mbstring): iconv_strpos() tidak ada, kembali ke strpos().');
			return strpos($haystack, $needle, $offset);
		}
	}
	if ( ! function_exists('mb_substr')) {
		function mb_substr($str, $start, $length = NULL, $encoding = NULL) {
			if (ICONV_ENABLED === TRUE) {
				isset($encoding) OR $encoding = config_item('charset');
				return iconv_substr(
					$str,
					$start,
					isset($length) ? $length : iconv_strlen($str, $encoding),
					$encoding
				);
			}
			log_message('debug', 'Kesesuaian (mbstring): iconv_substr() tidak ada, kembali ke substr().');
			return isset($length)
				? substr($str, $start, $length)
				: substr($str, $start);
		}
	}
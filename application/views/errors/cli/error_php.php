<?php defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan'); ?>

Error pada PHP ditemukan

Level: <?php echo $severity, "\n"; ?>
Pesan: <?php echo $message, "\n"; ?>
Nama File: <?php echo $filepath, "\n"; ?>
Nomor Baris: <?php echo $line; ?>

<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

Backtrace:
<?php foreach (debug_backtrace() as $error): ?>
<?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>
	File: <?php echo $error['file'], "\n"; ?>
	Baris: <?php echo $error['line'], "\n"; ?>
	Fungsi: <?php echo $error['function'], "\n\n"; ?>
<?php endif ?>
<?php endforeach ?>
<?php endif ?>
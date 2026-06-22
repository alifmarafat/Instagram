<?php
header('Content-Type: text/plain');
if (file_exists('data.txt')) {
    echo file_get_contents('data.txt');
} else {
    echo "No data found yet!";
}
?>

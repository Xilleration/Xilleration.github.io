<?php
if(isset($_POST['name']) && isset($_POST['mail'])) {
    $data = $_POST['name'] . '-' . $_POST['mail'] . "\n";
    $ret = file_put_contents('public_html/newsletter_signups.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
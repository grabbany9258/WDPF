
<?php

    //ebcryption: md5, sha1

    // echo sha1('rabbany');

    $secret = '949201aefac3e0b58a42db7bda0c48b822fe98b2';
    if (($_SERVER['PHP_AUTH_USER'] != 'g_rabbany') ||(hash('sha1', $_SERVER['PHP_AUTH_PW']) != $secret)) {
    header('WWW-Authenticate: Basic Realm="Secret Stash"');
    header('HTTP/1.0 401 Unauthorized');
    print('You must provide the proper credentials!');
    exit;
    }
?>

You have logged in succesfully.


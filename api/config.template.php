<?php

require_once('../vendor/block_io-php/block_io-php/lib/block_io.php');

$apiKey = 'my_api_key';
$pin = 'my_pin';
$walletUser = 'my_wallet';
$version = 2; // the API version

$block_io = new BlockIo($apiKey, $pin, $version);

?>
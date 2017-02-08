<?php

	require_once('../api/config.php');
	require_once('../vendor/block_io-php/block_io-php/lib/block_io.php');


$newAddressInfo = $block_io->get_new_address(array());
echo  "adress: ".$newAddressInfo->data->address;

?>

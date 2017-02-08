<?php

require_once('../api/config.php');

$newAddressInfo = $block_io->get_new_address(array());
echo  "address: ".$newAddressInfo->data->address;

?>

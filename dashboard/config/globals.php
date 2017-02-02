<?php

# Using API block.io
# Loading config.php secret file
require_once('../api/config.php');

# api call
$getBalanceInfo = $block_io->get_balance();
$available_balance = $getBalanceInfo->data->available_balance;
$pending_received_balance = $getBalanceInfo->data->pending_received_balance;
$network = $getBalanceInfo->data->network;

# server globals var
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$url = $_SERVER['SERVER_NAME'];
$page = $_SERVER['SCRIPT_NAME'];
$mail = $_SERVER['SERVER_ADMIN'];

?>
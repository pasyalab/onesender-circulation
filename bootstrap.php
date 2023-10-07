<?php

$connectionParams = [
    'dbname' => DB_NAME,
    'user' => DB_USERNAME,
    'password' => DB_PASSWORD,
    'host' => DB_HOST,
    'driver' => 'pdo_mysql',
];
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);

$library_name = 'Perpustakaan Ideal Serbaguna';
$device_id = 'put_your_device_id_here';
$api_url = 'https://your-onesender-instance.com/api/v1/messages';
$api_key = '_your_secure_token_';
$footer_text = 'Harap simpan resi ini sebagai bukti transaksi.';

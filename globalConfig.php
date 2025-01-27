<?php
// Define a URL base de acordo com o hostname
$hostname = $_SERVER['HTTP_HOST'];

if ($hostname == 'gtavares.site') {
    // $userDB = 'u681410679_admin';
    // $passwordDB = 'NowPay@2024';
    // $database = 'u681410679_nowpay';
    $baseURL = 'https://gtavares.site';
} else if ($hostname == 'localhost') {
    // $userDB = 'root';
    // $passwordDB = '';
    // $database = 'u681410679_nowpay';
    $baseURL = 'http://localhost/portfolio';
} else {
    // $userDB = 'u681410679_admin';
    // $passwordDB = 'NowPay@2024';
    // $database = 'u681410679_nowpay';
    $baseURL = 'https://gtavares.site';
}
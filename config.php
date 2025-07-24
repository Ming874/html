<?php
// /config.php

// --- DB 設定 ---
define('DB_HOST', 'localhost');
define('DB_NAME', 'scholarship');
define('DB_USER', 'scholarship_user');
define('DB_PASS', 'NCUEscholarship!@#');
define('DB_CHARSET', 'utf8mb4');

// --- 網站基本設定 ---
define('SITE_TITLE', 'NCUE 獎助學金資訊平台');
define('SITE_LOGO_PATH', 'assets/images/logo.png');

// --- SMTP 郵件伺服器設定 ---
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_USERNAME', 'ncuedorm10service@gmail.com');
define('SMTP_PASSWORD', 'gmrs vcuy hgli lsqv');
define('SMTP_PORT', 465);
define('SMTP_SECURE', 'ssl');

// --- 寄件人資訊 ---
define('MAIL_FROM_ADDRESS', 'ncuedorm10service@gmail.com');
define('MAIL_FROM_NAME', 'NCUE 獎助學金資訊平台');

define('EMAIL_VERIFICATION_MINUTES', 5);
date_default_timezone_set('Asia/Taipei');

// 部署時應使用環境變數管理
define('SERP_API_KEY', '1c6e893a6427bf36149a5dcb9c610f967b6faa17ab000c946b3ccf996fe3e0ef');
define('GEMINI_API_KEY', 'AIzaSyCq-ZcHgf0B1MHejHdwLLdCxs0KGLTjsfk');

?>
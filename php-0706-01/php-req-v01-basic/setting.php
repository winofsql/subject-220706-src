<?php
// ******************************
// PHP 8用
// ******************************
$pv = explode(".", phpversion());
if ($pv[0] + 0 >= 8) {
    error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING);
} else {
    error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
}

// ******************************
// キャッシュ
// ******************************
session_cache_limiter('nocache');
session_start();

// ******************************
// 日本語用
// ******************************
mb_language('Japanese');
mb_internal_encoding('UTF-8');

// データベース
$server = "localhost";
$user = "root";
$dbname = "lightbox";
$password = '';
$connect_string = "mysql:host={$host};dbname={$dbname}";

// グローバル変数
$pdo = null;
$title = "社員問合せ";
$error = null;

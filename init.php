<?php
$servername = "sql303.infinityfree.com";
$database = "if0_36202177_test";
$username = "if0_36202177";
$password = "hTxzxUqTNx";
$port = 3306;

$dsn = "mysql:host=$servername;dbname=$database;port=$port;charset=utf8";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
);

try {
    $con = new PDO($dsn, $username, $password, $options);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo json_encode(["success" => true, "message" => "Connection successful"]);
} catch (PDOException $e) {
    echo json_encode(["success" => false, "message" => "Failed to connect: " . $e->getMessage()]);
    exit();
}
?>


// تعيين المسارات
$tpl = "includes/template/";    // مجلد القوالب
$css = "layout/css/";           // مجلد الـ CSS
$js = "layout/js/";             // مجلد الـ JS
$lang = "includes/lang/";       // مجلد اللغات
$func = "includes/functions/";  // مجلد الوظائف

// تضمين الملفات الهامة
include $func . "functions.php"; // ملف الوظائف
include $lang . "en.php";        // ملف اللغة الإنجليزية
include $tpl . "header.php";     // هيدر الصفحة

// تضمين نافبار في جميع الصفحات ما عدا الصفحات التي تحتوي على متغير $noNavbar
if (!isset($noNavbar)) {
    include $tpl . "navbar.php"; // نافبار
}
?>

<?php
// Start the session
session_start();

// بيانات الاتصال بقاعدة البيانات
include "init.php";

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $database, $port);

// التحقق من اتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// استخراج البيانات من النموذج
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

// استعلام SQL للتحقق من وجود الهاتف في قاعدة البيانات
$sql = "SELECT * FROM users WHERE phone = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $phone);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // العثور على سجل مطابق، قم بفك تشفير كلمة المرور والتحقق منها
    $row = $result->fetch_assoc();
    $hashed_password = $row['encrypted_password'];

    // ��تحقق من صحة كلمة المرور
    if (password_verify($password, $hashed_password)) {
        // كلمة المرور صحيحة، قم بتوجيه المستخدم إلى صفحة HOME.PHP
        session_regenerate_id(true); // تجديد معرف الجلسة لمنع هجمات اختطاف الجلسة
        $_SESSION['phone'] = $phone; // تخزين رقم الهاتف في الجلسة
        header("Location: home.php");
        exit();
    } else {
        // كلمة المرور غير صحيحة، قم بإعادة توجيه المستخدم إلى صفحة تسجيل الدخول
        header("Location: index.php");
        exit();
    }
} else {
    // لم يتم العثور على سجل مطابق، قم بإعادة توجيه المستخدم إلى صفحة تسجيل الدخول
    header("Location: index.php");
    exit();
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();

// Set security headers
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
?>

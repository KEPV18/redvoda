<?php
// Start the session
session_start();

// بيانات الاتصال بقاعدة البيانات
$servername = "tesy";
$username = "test";
$password = "test";
$database = "test";
$port = 3306;

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $database, $port);

// التحقق من اتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// استخراج البيانات من النموذج
$phone = $_POST['phone'];
$password = $_POST['password'];

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

    // التحقق من صحة كلمة المرور
    if (password_verify($password, $hashed_password)) {
        // كلمة المرور صحيحة، قم بتوجيه المستخدم إلى صفحة HOME.PHP
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
?>

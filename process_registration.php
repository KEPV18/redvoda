<?php
// بيانات الاتصال بقاعدة البيانات
include "init.php";

// إعداد ترويسة JSON للتأكد من أن الرد سيتم تحليله كـ JSON في JavaScript
header('Content-Type: application/json');

// قائمة الرسائل
$messages = [];

try {
    $messages[] = "تم الاتصال بنجاح بقاعدة البيانات.";
} catch (PDOException $e) {
    echo json_encode(["success" => false, "messages" => ["فشل في الاتصال بقاعدة البيانات: " . $e->getMessage()]]);
    exit();
}

// التعامل مع الطلب القادم
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $messages[] = "تم استقبال البيانات بنجاح.";

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $messages[] = "تم تشفير كلمة المرور بنجاح.";

    // استعلام SQL للبحث عن وجود الرقم الهاتفي في قاعدة البيانات
    $check_sql = "SELECT * FROM users WHERE phone = :phone";
    $stmt = $con->prepare($check_sql);
    if ($stmt === false) {
        echo json_encode(["success" => false, "messages" => array_merge($messages, ["خطأ في تحضير الاستعلام: " . $con->errorInfo()])]);
        exit();
    }
    $stmt->execute(['phone' => $phone]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $messages[] = "تم البحث عن المستخدم في قاعدة البيانات.";

    if ($result) {
        echo json_encode(["success" => false, "messages" => array_merge($messages, ["هذا الرقم مسجل مسبقًا!"])]);
    } else {
        $insert_sql = "INSERT INTO users (phone, password, encrypted_password) VALUES (:phone, :password, :hashed_password)";
        $stmt = $con->prepare($insert_sql);
        if ($stmt === false) {
            echo json_encode(["success" => false, "messages" => array_merge($messages, ["خطأ في تحضير الاستعلام: " . $con->errorInfo()])]);
            exit();
        }
        if ($stmt->execute(['phone' => $phone, 'password' => $password, 'hashed_password' => $hashed_password])) {
            echo json_encode(["success" => true, "messages" => array_merge($messages, ["تم التسجيل بنجاح!"])]);
        } else {
            echo json_encode(["success" => false, "messages" => array_merge($messages, ["حدث خطأ أثناء التسجيل: " . $stmt->errorInfo()])]);
        }
    }
}
?>

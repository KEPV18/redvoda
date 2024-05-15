<?php
// بيانات الاتصال بقاعدة البيانات
$servername = "test";
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

// التعامل مع الطلب القادم
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استخراج البيانات من النموذج
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // تشفير كلمة المرور
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // استعلام SQL للبحث عن وجود الرقم الهاتفي في قاعدة البيانات
    $check_sql = "SELECT * FROM users WHERE phone = ?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // إذا وجد الرقم الهاتفي مسبقًا، عرض رسالة الخطأ
        echo "هذا الرقم مسجل مسبقًا!";
    } else {
        // إذا لم يتم العثور على الرقم الهاتفي، قم بإجراء عملية التسجيل
        // استخدام البيانات المُدخلة في استعلام MySQL
        $insert_sql = "INSERT INTO users (phone, password, encrypted_password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($insert_sql);
        $stmt->bind_param("sss", $phone, $password, $hashed_password);
        if ($stmt->execute()) {
            // تسجيل ناجح، قم بتوجيه المستخدم إلى صفحة تسجيل الدخول
            header("Location: index.php");
            exit();
        } else {
            // حدث خطأ أثناء التسجيل، عد إلى الصفحة الرئيسية
            header("Location: register.php");
            exit();
        }
    }
    $stmt->close();
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>

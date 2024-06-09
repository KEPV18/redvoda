<?php
// Start the session
session_start();
// تضمين ملف الإعدادات

<?php include 'connection.php'; ?>

// إنشاء الاتصال
$conn = mysqli_connect($servername, $username, $password, $database, $port);

// التحقق من نجاح الاتصال
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// القيمة المطلوبة للبحث - يتم استبدالها برقم الهاتف المستخدم في تسجيل الدخول
$searchValue = isset($_SESSION["phone"]) ? $_SESSION["phone"] : "";

// كتابة استعلام SQL
$sql = "SELECT * FROM Customer WHERE Phone_Number = '$searchValue'";

// تنفيذ الاستعلام
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error executing query: " . mysqli_error($conn));
}

// إذا لم يتم العثور على بيانات
if (mysqli_num_rows($result) == 0) {
    
    echo "<tr><td colspan='6'>يبدو انك لم تقم بالتسجيل في الفورم الخاصة بالأشتراك بعد <a href='https://forms.gle/X87RyvPj7L3ZaBHK7' style='color: #007bff; text-decoration: none; font-weight: bold;'>اشترك من هنا</a>.</td></tr>";

} else {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['Phone_Number'] . "</td>";
        echo "<td>" . $row['Subscription_Value'] . "</td>";
        echo "<td>" . htmlspecialchars($row['Order_Status']) . "</td>"; // تحويل الرموز الخاصة
        echo "<td>" . $row['Next_Payment_Date'] . "</td>";
        // تحديد قيمة Payment Required بناءً على قيمة الحقل في قاعدة البيانات
        echo "<td>" . ($row['Payment_Required'] == 0 ? 'Yes' : 'No') . "</td>";
        // فحص إذا كانت قيمة Additional_Info فارغة أم لا
        if (!empty($row['Additional_Info'])) {
            echo "<td>" . htmlspecialchars($row['Additional_Info']) . "</td>";
        } else {
            // إذا كانت قيمة Additional_Info فارغة، لا تقم بعرض الحقل تمامًا
            echo "<td style='display: none;'></td>";
        }
        echo "</tr>";
    }
}

// إغلاق الاتصال بقاعدة البيانات
mysqli_close($conn);
?>

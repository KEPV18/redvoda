<?php
// Start the session
session_start();

// إفراغ الجلسة
$_SESSION = array();

// تدمير الجلسة
session_destroy();

// إعادة توجيه المستخدم إلى صفحة تسجيل الدخول
header("Location: index.php");
exit();
?>

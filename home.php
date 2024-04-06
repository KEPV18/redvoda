<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles5.css">
    <link rel="icon" href="08f7ff2ff1b807d2a8272c8a05b94a90.jpg" type="image/jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .logout-button {
            background-color: #ff3366 !important;
            color: #fff !important;
            padding: 10px 20px !important;
            border: none !important;
            border-radius: 5px !important;
            font-size: 16px !important;
            cursor: pointer !important;
            text-decoration: none !important;
            transition: background-color 0.3s ease !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to red voda</h1>
        <p> HI </p>
        <p id="userPhoneParagraph"></p> <!-- هنا يتم عرض رقم الهاتف -->
        <table id="customerData">
            <thead>
                <tr>
                    <th>Phone Number</th>
                    <th>Subscription Value</th>
                    <th>Order Status</th>
                    <th>Next Payment Date</th>
                    <th>Payment Required</th>
                    <th>Additional Info</th> <!-- إضافة العنوان الجديد -->
                </tr>
            </thead>
            <tbody>
                <!-- هنا سيتم عرض بيانات العميل -->
                <?php include 'display_customer_data.php'; ?>
            </tbody>
        </table>
        <div id="result"></div>
        <br>
        <a href="logout.php" class="logout-button">تسجيل الخروج</a>
    </div>
    <footer>
        <p>
    <a target="_blank" href="https://github.com/KEPV18">kepv</a>
    تم إنشاؤها بـ <i class="fa fa-heart"></i> بواسطة
</p>

    </footer>
</body>
</html>

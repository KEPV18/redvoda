<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل جديد</title>
    <link rel="stylesheet" href="styles3.css">
    <link rel="icon" href="08f7ff2ff1b807d2a8272c8a05b94a90.jpg" type="image/jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>تسجيل حساب جديد</h1>
        <form action="process_registration.php" method="post">
            <label for="phone" class="sr-only">رقم الهاتف:</label>
            <input type="text" id="phone" name="phone" placeholder="رقم الهاتف" required>
            <label for="password" class="sr-only">كلمة المرور:</label>
            <input type="password" id="password" name="password" placeholder="كلمة المرور" required>
            <input type="submit" value="تسجيل" id="submit">
            <div class="login-link">
                هل لديك حساب؟ <a href="login.php">سجل دخول من هنا</a>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const phone = document.getElementById('phone');
            const password = document.getElementById('password');
            const submitBtn = document.getElementById('submit');

            function updateMessage(message, smallMessage = "", backgroundColor = "") {
                const messageElement = document.getElementById('message');
                const smallMessageElement = document.getElementById('smallMessage');
                if (messageElement) messageElement.innerHTML = message;
                if (smallMessageElement) smallMessageElement.innerHTML = smallMessage;
                if (backgroundColor) document.body.style.background = backgroundColor;
            }

            phone.addEventListener("input", () => updateMessage('Enter your phone number', "", '#88C9E8'));
            password.addEventListener('input', () => updateMessage('Choose your password', "", '#D5F3A6'));
            password.addEventListener('keyup', () => {
                const lengthMessage = password.value.length <= 3 ? "Make it strong" :
                                      password.value.length < 10 ? "Strong as a bull!" :
                                      "It's unbreakable!!!";
                updateMessage('Choose your password', lengthMessage);
            });

            submitBtn.addEventListener('mouseover', () => updateMessage("You're a click away", "Do it. That's what you are here for.", '#FCEFA6'));
            submitBtn.addEventListener('click', (event) => {
                event.preventDefault();
                form.innerHTML = '<h1>Good job!</h1><p class="success-message">There is a confirmation link waiting in your email inbox.</p>';
                document.body.style.background = '#D7F5DE';
            });
        });
    </script>

    <footer>
        <p>
            <a target="_blank" href="https://github.com/KEPV18">kepv</a>
            تم إنشاؤها بـ <i class="fa fa-heart"></i> بواسطة
        </p>
    </footer>
</body>
</html>
</html>

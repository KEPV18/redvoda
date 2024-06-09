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
        <form id="registrationForm">
            <label for="phone" class="sr-only">رقم الهاتف:</label>
            <input type="text" id="phone" name="phone" placeholder="رقم الهاتف" required>
            <label for="password" class="sr-only">كلمة المرور:</label>
            <input type="password" id="password" name="password" placeholder="كلمة المرور" required>
            <input type="submit" value="تسجيل" id="submit">
            <div class="login-link">
                هل لديك حساب؟ <a href="login.php">سجل دخول من هنا</a>
            </div>
        </form>
        <div id="message"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registrationForm');
            const messageDiv = document.getElementById('message');

            function showMessage(messages, isSuccess) {
                messageDiv.innerHTML = "";
                messages.forEach(msg => {
                    const p = document.createElement('p');
                    p.textContent = msg;
                    p.style.color = isSuccess ? 'green' : 'red';
                    messageDiv.appendChild(p);
                });
            }

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const formData = new FormData(form);
                fetch('process_registration.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    showMessage(data.messages, data.success);
                    if (data.success) {
                        setTimeout(() => {
                            window.location.href = 'login.php';
                        }, 3000);
                    }
                })
                .catch(error => {
                    showMessage(['حدث خطأ أثناء التسجيل. حاول مرة أخرى.'], false);
                });
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

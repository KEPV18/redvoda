<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل جديد</title>
    <link rel="stylesheet" href="styles3.css">
    <link rel="icon" href="08f7ff2ff1b807d2a8272c8a05b94a90.jpg" type="image/jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    </style>
</head>
<body>
    <div class="container">
    <h1>تسجيل حساب جديد</h1>
    <form action="process_registration.php" method="post">
        <label for="phone" class="sr-only">رقم الهاتف:</label>
        <input type="text" id="phone" name="phone" placeholder="رقم الهاتف" required>
        <label for="password" class="sr-only">كلمة المرور:</label>
        <input type="password" id="password" name="password" placeholder="كلمة المرور" required>
        <input type="submit" value="تسجيل">
        <div class="login-link">
    هل لديك حساب؟ <a href="login.php">سجل دخول من هنا</a>
    </div>
    </form>
    </div>

    <script>
        const form = document.querySelector('form');
        const message = document.getElementById('message');
        const smallMessage = document.getElementById('smallMessage');
        const phoneMessage = 'Enter your phone number';
        const passwordMessage = 'Choose your password';
        const phone = document.getElementById('phone');
        const password = document.getElementById('password');
        const submitBtn = document.getElementById('submit');

        function firstMessage(){
            message.innerHTML = phoneMessage;
            smallMessage.innerHTML = "";
            document.body.style.background= '#88C9E8';
        }

        function secondMessage(){
            message.innerHTML = passwordMessage;
            document.body.style.background ='#D5F3A6';
        }

        function length(){
            if(password.value.length <= 3){
                smallMessage.innerHTML = "Make it strong";
            } else if(password.value.length > 3 && password.value.length <10){
                smallMessage.innerHTML = "Strong as a bull!";
            } else if(password.value.length >=10){
                smallMessage.innerHTML = "It's unbreakable!!!";
            } else {
                smallMessage.innerHTML = "";
            }
        }

        function formValidation(){
            phone.addEventListener("input", firstMessage);
            password.addEventListener('input', secondMessage);
            password.addEventListener('keyup', length);

            submitBtn.addEventListener('mouseover', function(event){
                message.innerHTML="You're a click away";
                smallMessage.innerHTML = "Do it. That's what you are here for.";
                document.body.style.background = '#FCEFA6';
            });

            submitBtn.addEventListener('click', function(event){
                form.innerHTML = '<h1>Good job!</h1><p class="success-message">There is a confirmation link waiting in your email inbox.</p>';
                document.body.style.background = '#D7F5DE';
            });
        }

        formValidation();
    </script>
   
    <footer>
        <p>
    <a target="_blank" href="https://github.com/KEPV18">kepv</a>
    تم إنشاؤها بـ <i class="fa fa-heart"></i> بواسطة
</p>

    </footer>
</body>
</html>
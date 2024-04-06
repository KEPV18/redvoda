<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الرئيسية</title>
    <link rel="icon" href="08f7ff2ff1b807d2a8272c8a05b94a90.jpg" type="image/jpg">
    <style>
        /* تنسيق المربع الحواري */
.modal {
  display: none; /* أخفاء المربع الحواري افتراضيًا */
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4); /* لون خلفية شفاف */
  color:black;
}

/* تنسيق محتوى المربع الحواري */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* تنسيق زر الإغلاق */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

/* تنسيق الزر الموافق */
#confirmBtn {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  margin-top: 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

#confirmBtn:hover {
  background-color: #45a049;
}

        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #0a878d;
    direction: rtl;
    color: #fff2f2;
    font-size: 30px;
}

        header {
            background-color: #333; /* لون خلفية الهيدر */
            color: #fff; /* لون النص في الهيدر */
            
            text-align: center;
        }

        .header-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; /* ترتيب العناصر عمودياً */
        }

        .logo img {
            width: 150px; /* تكبير حجم اللوجو */
            height: 150px;
            float:left;
        }

        h1{float:right;}

        img{    margin-right: 20px;
}

        nav ul {
            list-style-type: none;
            padding: 0;
            margin-top: 10px; /* تباعد بسيط بين اللينكات */
        }

        nav ul li {
            display: inline;
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 8px 15px;
            border: 1px solid #fff;
            border-radius: 5px;
            font-size: 18px; /* تكبير حجم الخط */
            margin-top: 10px; /* تباعد بين الزرين */
            background-color:#0a878d; /* خلفية الزر شفافة */
        }

        nav ul li a:hover {
            background-color: #000; /* تغيير لون خلفية الزر عند التحويم */
        }

        .rectangle-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .rectangle-left {
            width: 50%;
            padding: 10px;
        }

        .rectangle-right {
            width: 50%;
            padding: 10px;
            text-align: center;
        }

        .rectangle-image {
            width: 100%;
            height: auto;
            border: 1px solid #000;
            box-sizing: border-box;
        }

        .services {
            background-color: #333; /* لون خلفية العنوان */
            color: #fff; /* لون العنوان */
            padding: 20px;
        }

        .prices {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .prices th,
        .prices td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }

        .prices th {
            background-color: #333;
            color: #fff;
        }

        .terms {
            
            padding: 20px;
            margin-top: 20px;
            
        }

        footer {
            background-color: #333; /* لون خلفية الفوتر */
            color: #fff; /* لون النص في الفوتر */
            padding: 20px;
            text-align: center;
            margin-top: 20px;
            height: 100px
        }

        footer a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #fff;
            border-radius: 5px;
            margin: 0 5px;
            
        }

        footer a:hover {
            background-color: #fff;
            color: #333;
        }

        .footer-info {
            margin-top: 10px;
        }

        .footer-info a {
            color: #fff;
            text-decoration: none;
        }



        .subscribe-now {
             /* لون النص */
            border: 1px solid ;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 150%; /* حجم الخط */
            margin-top: 20px;
            text-align: center;
            background-color:#333;
        }

        .subscribe-now a {
            /* لون النص */
            
            text-decoration: none;
            color:white;
             /* لون النص */
        
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 150%; /* حجم الخط */
            margin-top: 20px;
            text-align: center;
        }

        .subscribe-now a:hover {
            background-color:green; /* لون خلفية الزر عند التحويم */
            color: white; /* لون النص عند التحويم */
        }
    </style>
</head>

<body>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>التحويل للنظام غير متاح الآن لكن يمكنك الاشتراك معنا وسوف يتم تحويلك في وقت فتح التحويل للنظام وإذا كنت مشتركًا قديمًا معنا يمكنك تسجيل حساب برقمك وسوف تظهر لك بيانات حسابك واشتراكك بالكامل.</p>
    <button id="confirmBtn">موافق</button>
  </div>
</div>

    <header>
        <div class="header-content">
            <div class="logo">
                <img src="08f7ff2ff1b807d2a8272c8a05b94a90.jpg" alt="الشعار">
                <h1>Red Voda </h1> <!-- تغيير حجم العنوان -->
            </div>
        </div>
    </header>

    <div class="rectangle-container">
        <div class="rectangle-left">
            <img src="efd72c296b-img.jpg" alt="صورة مستطيلة" class="rectangle-image">
        </div>
        <div class="rectangle-right">
            <nav>
                <ul>
                    <li><a href="login.php">تسجيل الدخول</a></li>
                    <li><a href="register.php">تسجيل حساب جديد</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="services">
        <h2>الخدمات التي نقدمها</h2>
        <p>نقدم خدمات مختلفة في الباقات المتنوعة الخاصة بشركات معينة فقط...</p>
    </div>

    <table class="prices">
        <thead>
            <tr>
                <th>الخدمة</th>
                <th>السعر</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>20 جيجا و 3000 دقيقه</td>
                <td>$160 كاش</td>
            </tr>
            <tr>
                <td>35 جيجا و 5000 دقيقه</td>
                <td>$220 كاش</td>
            </tr>
            <tr>
                <td>40 جيجا و 4000 دقيقة</td>
                <td>$250 كاش</td>
            </tr>
            <tr>
                <td>50 جيجا و 6000 دقيقة</td>
                <td>$270 كاش</td>
            </tr>
            <tr>
                <td>70 جيجا و 9000 دقيقه</td>
                <td>$330 كاش</td>
            </tr>
        </tbody>
    </table>

    <div class="subscribe-now">
        <a href="register.php">اشترك الآن من هنا</a>
    </div>

    <div class="terms">
        <h2>الشروط والأحكام</h2>
        <p>
            ملحوظه: صلاحية الباقة شهر.
            <br>ملحوظة: الميجابيتس بالميجا مش بالسوبر<br>.
            ملحوظة: الدقايق لكل الشبكات الدقيقة بدقيقة<br>.
            بتحجز معايا عن طريق رقمك وباسوردك بتوع تطبيق انا فودافون <br>
            ولازم ميكونش خطك علية سلفني او نوتة<br> ولو عايز تتأكد هتطلب *155# وتشوف المديونية على الخط كام وتسددها<br>. خطك نضيف هتكلمني واضيفك ونظامك بيتغير خلال ساعتين<br> لنظام ريد ليمت نظام فاتورتة بتكون 25ج كل سنة. بتنزل بعد اول شهر ليك فى النظام .<br>
            ملحوظة: اى باقة فليكس كانت معاك وانت بتحول للنظام ده هتتلغي<br> او اى باقة انترنت.
            لو حبيت تلغي النظام <br>هتروح فرع فودافون وتقولة عايز احول نظام خطي لنظام كارت وهياخد منك 50ج رسوم</p>
    </div>

    <footer>
        <div>
            <a href="https://t.me/kepvv">تواصل معنا</a>
            <a href="https://t.me/redvoda">تابعنا لمعرفة أخر أخبارنا</a>
        </div>
        <div class="footer-info">
            <p>جميع الحقوق محفوظة © <a href="https://github.com/KEPV18">kepv</a></p>
        </div>
    </footer>
    <script>
        // احصل على المربع الحواري
var modal = document.getElementById("myModal");

// احصل على زر الإغلاق
var closeBtn = document.getElementsByClassName("close")[0];

// عند فتح الصفحة، أظهر المربع الحواري
window.onload = function() {
  modal.style.display = "block";
}

// عند الضغط على زر الإغلاق، أخفي المربع الحواري
closeBtn.onclick = function() {
  modal.style.display = "none";
}

// عند النقر خارج المربع الحواري، أخفي المربع الحواري
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// عند الضغط على زر الموافق، أخفي المربع الحواري
document.getElementById("confirmBtn").onclick = function() {
  modal.style.display = "none";
};


    </script>
</body>

</html>
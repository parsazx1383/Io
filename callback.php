<?php
// callback.php - صفحه بازگشت زرین‌پال
$authority = $_GET['Authority'] ?? '';
$status = $_GET['Status'] ?? 'OK'; // زرین‌پال معمولاً Status=OK می‌فرستد

// صفحه ساده و زیبا
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پرداخت موفق</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background: #000000;
            font-family: 'Segoe UI', Tahoma, sans-serif;
            color: #4da6ff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }
        .success-box {
            background: linear-gradient(135deg, #0a0a0a, #1a1a2e);
            padding: 50px 40px;
            border-radius: 25px;
            max-width: 700px;
            width: 100%;
            border: 2px solid #4da6ff;
            box-shadow: 0 0 50px rgba(77, 166, 255, 0.3);
        }
        h1 {
            font-size: 48px;
            margin-bottom: 30px;
            text-shadow: 0 0 20px #4da6ff;
        }
        .checkmark {
            font-size: 80px;
            margin: 20px 0;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        .message {
            font-size: 28px;
            color: #b3d9ff;
            margin: 30px 0;
            line-height: 1.6;
        }
        .instruction {
            font-size: 22px;
            color: #99ccff;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #4da6ff;
        }
        .authority-code {
            background: rgba(20, 40, 80, 0.5);
            padding: 15px;
            border-radius: 10px;
            margin: 20px 0;
            font-family: monospace;
            font-size: 20px;
            color: #66ff66;
        }
        .telegram-btn {
            display: inline-block;
            margin-top: 30px;
            padding: 15px 30px;
            background: #0088cc;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-size: 20px;
            transition: 0.3s;
        }
        .telegram-btn:hover {
            background: #00aaff;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="success-box">
        <div class="checkmark">✅</div>
        <h1>پرداخت شما با موفقیت انجام شد</h1>
        
        <div class="message">
            تراکنش شما با موفقیت ثبت گردید
        </div>
        
        <?php if(!empty($authority)): ?>
        <div class="authority-code">
            شناسه پرداخت: <?php echo htmlspecialchars($authority); ?>
        </div>
        <?php endif; ?>
        
        <div class="instruction">
            📱 اکنون به ربات تلگرام بازگردید<br>
            و روی دکمه <strong>«اعتبار سنجی»</strong> کلیک کنید
        </div>
        
        <a href="https://t.me" class="telegram-btn">بازگشت به تلگرام</a>
        
        <script>
            // هدایت خودکار بعد از 10 ثانیه
            setTimeout(function() {
                window.location.href = "https://t.me";
            }, 10000);
        </script>
    </div>
</body>
</html>
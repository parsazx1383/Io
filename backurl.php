<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پرداخت موفق</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: #000000;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 100%);
        }
        
        .success-container {
            background: rgba(20, 20, 30, 0.9);
            border-radius: 25px;
            padding: 50px 40px;
            text-align: center;
            max-width: 700px;
            width: 100%;
            box-shadow: 
                0 0 80px rgba(0, 150, 255, 0.3),
                0 10px 40px rgba(0, 0, 0, 0.5),
                inset 0 0 60px rgba(0, 100, 200, 0.1);
            border: 1px solid rgba(100, 150, 255, 0.2);
            position: relative;
            overflow: hidden;
        }
        
        .success-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(0, 150, 255, 0.1) 0%, transparent 70%);
            animation: pulse 4s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.3; }
            50% { transform: scale(1.1); opacity: 0.5; }
        }
        
        .checkmark {
            width: 120px;
            height: 120px;
            margin: 0 auto 40px;
            position: relative;
        }
        
        .checkmark-circle {
            position: absolute;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #4da6ff;
            animation: circle-anim 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }
        
        .checkmark-check {
            position: absolute;
            width: 60px;
            height: 30px;
            border-left: 4px solid #4da6ff;
            border-bottom: 4px solid #4da6ff;
            transform: rotate(-45deg);
            left: 30px;
            top: 50px;
            opacity: 0;
            animation: check-anim 0.4s 0.4s ease-in-out forwards;
        }
        
        @keyframes circle-anim {
            0% { stroke-dasharray: 0 100; }
            100% { stroke-dasharray: 100 100; }
        }
        
        @keyframes check-anim {
            0% { opacity: 0; transform: rotate(-45deg) scale(0); }
            100% { opacity: 1; transform: rotate(-45deg) scale(1); }
        }
        
        .success-title {
            color: #4da6ff;
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 30px;
            text-shadow: 
                0 0 20px rgba(77, 166, 255, 0.7),
                0 0 40px rgba(77, 166, 255, 0.4);
            letter-spacing: 1px;
            line-height: 1.4;
            animation: text-glow 2s ease-in-out infinite alternate;
        }
        
        @keyframes text-glow {
            from { text-shadow: 0 0 20px rgba(77, 166, 255, 0.7), 0 0 40px rgba(77, 166, 255, 0.4); }
            to { text-shadow: 0 0 30px rgba(77, 166, 255, 0.9), 0 0 60px rgba(77, 166, 255, 0.6); }
        }
        
        .success-message {
            color: #b3d9ff;
            font-size: 24px;
            line-height: 1.6;
            margin-top: 40px;
            padding: 25px;
            background: rgba(30, 40, 60, 0.5);
            border-radius: 15px;
            border: 1px solid rgba(100, 150, 255, 0.15);
            box-shadow: inset 0 0 20px rgba(0, 50, 100, 0.2);
            animation: slide-up 0.8s ease-out 0.8s both;
        }
        
        @keyframes slide-up {
            from { 
                opacity: 0; 
                transform: translateY(30px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }
        
        .highlight {
            color: #66ccff;
            font-weight: bold;
            text-shadow: 0 0 10px rgba(102, 204, 255, 0.5);
        }
        
        .instruction-box {
            margin-top: 35px;
            padding: 20px;
            background: rgba(20, 30, 50, 0.6);
            border-radius: 15px;
            border-left: 4px solid #4da6ff;
        }
        
        .instruction {
            color: #99ccff;
            font-size: 20px;
            line-height: 1.8;
        }
        
        .bot-button {
            display: inline-block;
            margin-top: 35px;
            padding: 18px 40px;
            background: linear-gradient(135deg, #0066cc 0%, #0099ff 100%);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-size: 20px;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(0, 102, 204, 0.4);
            border: 2px solid rgba(255, 255, 255, 0.1);
        }
        
        .bot-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(0, 102, 204, 0.6);
            background: linear-gradient(135deg, #0099ff 0%, #33ccff 100%);
        }
        
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }
        
        .particle {
            position: absolute;
            width: 3px;
            height: 3px;
            background-color: #4da6ff;
            border-radius: 50%;
            animation: float 5s infinite linear;
        }
        
        @keyframes float {
            0% {
                transform: translateY(100vh) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 0.7;
            }
            90% {
                opacity: 0.7;
            }
            100% {
                transform: translateY(-100px) translateX(100px);
                opacity: 0;
            }
        }
        
        @media (max-width: 768px) {
            .success-container {
                padding: 30px 20px;
                margin: 20px;
            }
            
            .success-title {
                font-size: 36px;
            }
            
            .success-message {
                font-size: 20px;
                padding: 20px;
            }
            
            .instruction {
                font-size: 18px;
            }
            
            .checkmark {
                width: 100px;
                height: 100px;
            }
            
            .checkmark-circle {
                width: 100px;
                height: 100px;
            }
            
            .checkmark-check {
                width: 50px;
                height: 25px;
                left: 25px;
                top: 40px;
            }
        }
        
        .loading-bar {
            width: 100%;
            height: 4px;
            background: rgba(100, 150, 255, 0.1);
            border-radius: 2px;
            margin-top: 30px;
            overflow: hidden;
        }
        
        .loading-progress {
            width: 0%;
            height: 100%;
            background: linear-gradient(90deg, #0066cc, #4da6ff);
            border-radius: 2px;
            animation: loading 3s ease-in-out 1.5s forwards;
        }
        
        @keyframes loading {
            0% { width: 0%; }
            100% { width: 100%; }
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="particles" id="particles"></div>
        
        <div class="checkmark">
            <div class="checkmark-circle"></div>
            <div class="checkmark-check"></div>
        </div>
        
        <h1 class="success-title">✅ پرداخت شما با موفقیت انجام شد</h1>
        
        <div class="success-message">
            تراکنش شما با موفقیت ثبت و تایید گردید.
        </div>
        
        <div class="instruction-box">
            <p class="instruction">
                <span class="highlight">📱 اکنون به ربات بازگردید</span><br>
                و روی دکمه <span class="highlight">«اعتبار سنجی»</span> کلیک کنید.
            </p>
        </div>
        
        <div class="loading-bar">
            <div class="loading-progress"></div>
        </div>
        
        <?php
        // اگر شناسه پرداخت دارید، می‌توانید اینجا پردازش کنید
        $authority = isset($_GET['Authority']) ? $_GET['Authority'] : '';
        $status = isset($_GET['Status']) ? $_GET['Status'] : '';
        
        if($status === 'OK' && !empty($authority)) {
            echo '<div style="margin-top: 20px; color: #66ff66; font-size: 16px;">
                    شناسه پرداخت: <strong>' . htmlspecialchars($authority) . '</strong>
                  </div>';
        }
        ?>
    </div>
    
    <script>
        // ایجاد ذرات متحرک
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 30;
            
            for(let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                
                // موقعیت تصادفی
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 5 + 's';
                
                // اندازه تصادفی
                const size = Math.random() * 3 + 1;
                particle.style.width = size + 'px';
                particle.style.height = size + 'px';
                
                // شفافیت تصادفی
                particle.style.opacity = Math.random() * 0.5 + 0.3;
                
                particlesContainer.appendChild(particle);
            }
        }
        
        // هدایت خودکار به ربات تلگرام بعد از 8 ثانیه
        setTimeout(function() {
            const message = "لطفاً به ربات تلگرام بازگردید و روی دکمه اعتبارسنجی کلیک کنید.";
            alert(message);
        }, 8000);
        
        // اجرا هنگام لود صفحه
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();
            
            // اضافه کردن انیمیشن ورود برای المان‌ها
            const elements = document.querySelectorAll('.success-title, .success-message, .instruction-box');
            elements.forEach((el, index) => {
                el.style.animationDelay = (index * 0.2) + 's';
            });
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>नेपाल पर्यटन</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-image: url(assets/images/mount.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            color: #fff;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.7);
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            max-width: 700px;
            text-align: center;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.6);
            animation: fadeIn 1.5s ease-in-out;
        }

        h1 {
            font-size: 42px;
            color: #FFD700;
            margin-bottom: 15px;
        }

        h3 {
            font-size: 24px;
            color: #f2f2f2;
            margin-bottom: 20px;
            font-style: italic;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .buttons a {
            display: inline-block;
            background-color: #e60026;
            color: white;
            padding: 14px 28px;
            border-radius: 30px;
            margin: 0 10px;
            font-size: 18px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .buttons a:hover {
            background-color: #b3001b;
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 600px) {
            .card {
                padding: 25px;
            }

            h1 {
                font-size: 32px;
            }

            h3 {
                font-size: 18px;
            }

            p {
                font-size: 16px;
            }

            .buttons a {
                padding: 10px 20px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="overlay">
        <div class="card">
            <h1>नेपालमा स्वागत छ!</h1>
            <h3>🌄 "जहाँ स्वर्ग झर्छ हिमालको काखमा!"</h3>
            <p>नेपालको सुन्दरता, संस्कृति र साहसिक यात्राले तपाईंलाई अविस्मरणीय अनुभव दिनेछ। हामीसँग सँगै पर्यटनको नयाँ यात्रा सुरु गर्नुहोस्।</p>
            <div class="buttons">
                <a href="signup.php">🚀 Sign Up</a>
                <a href="login.php">🔑 Login</a>
            </div>
        </div>
    </div>
</body>
</html>

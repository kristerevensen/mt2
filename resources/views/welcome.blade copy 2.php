<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measuretank - Enhance Your Website's Performance</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background: #f5f5f5;
            color: #333;
        }
        .navbar {
            background: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        .navbar a {
            text-decoration: none;
            color: #007bff;
            margin-left: 20px;
        }
        .navbar a:hover {
            color: #0056b3;
        }
        .hero {
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(to right, #6dd5ed, #2193b0);
            color: white;
        }
        .hero h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .hero p {
            font-size: 1.2em;
        }
        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 40px 20px;
        }
        .feature {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .feature h3 {
            color: #007bff;
        }
        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 15px 20px;
        }
        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div><strong>Measuretank</strong></div>
        <div>
            <a href="#">Home</a>
            <a href="#">Features</a>
            <a href="#">Pricing</a>
            <a href="#">Contact</a>
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </nav>

    <div class="hero">
        <h1>Welcome to Measuretank</h1>
        <p>Your ultimate tool for website analysis and optimization.</p>
    </div>

    <div class="features">
        <div class="feature">
            <h3>Real-Time Analytics</h3>
            <p>Gain insights into your website's traffic and user behavior.</p>
        </div>
        <div class="feature">
            <h3>SEO Improvement</h3>
            <p>Tools and strategies to boost your website's search engine ranking.</p>
        </div>
        <div class="feature">
            <h3>User Engagement</h3>
            <p>Enhance user experience and engagement with in-depth analytics.</p>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2023 Measuretank. All rights reserved.</p>
    </div>
</body>
</html>

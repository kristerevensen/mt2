<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Measuretank - Optimize Your Website Performance</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script>
        (function() {
    var projectCode = document.currentScript.getAttribute('data-project-code');

    function collectData() {
        var data = {
            url: window.location.href,
            title: document.title,
            referrer: document.referrer,
            deviceType: navigator.userAgent,
            timestamp: new Date().toISOString(),
            projectCode: projectCode
        };

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'https://www.measuretank.com/tracking/collect/', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.send(JSON.stringify(data));
            console.log(data);
        }

        if (window.addEventListener) {
            window.addEventListener('load', collectData, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', collectData);
        }
    })();

    </script>
    <style>
        body {
            font-family: Figtree, sans-serif;
            margin: 0;
            padding: 0;
            background: #f3f4f6;
            color: #333;
            text-align: center;
        }
        .header {
            background-color: #ffffff;
            padding: 20px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .hero {
            padding: 50px 20px;
        }
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.2rem;
            color: #555;
        }
        .button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            text-decoration: none;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .feature {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .feature h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .feature p {
            color: #555;
        }
        .footer {
            background-color: #007bff;
            color: white;
            padding: 20px 0;
            margin-top: 40px;
        }
        body, html {
            height: 100%;
            margin: 0;
        }

        .site-container {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        .hero, .features {
            flex: 1; /* This makes the content expand */
        }

        .footer {
            /* Footer styles as before */
        }
    </style>
</head>
<body>
<div class="site-container"> <!-- Wrapper for entire content -->

    <div class="header">
        <h2>Measuretank</h2>
    </div>

    <div class="hero">
        <h1>Welcome to Measuretank</h1>
        <p>Your ultimate tool for website optimization</p>
        <a href="{{ route('register') }}" class="button">Get Started</a>
    </div>

    <div class="features">
        <div class="feature">
            <h3>Comprehensive Analytics</h3>
            <p>Deep insights into your website's performance and user behavior.</p>
        </div>
        <div class="feature">
            <h3>SEO Optimization</h3>
            <p>Tools and tips to improve your website's visibility on search engines.</p>
        </div>
        <div class="feature">
            <h3>Collaborative Tools</h3>
            <p>Collaborate with your team efficiently for better project management.</p>
        </div>
    </div>
</div>
    <div class="footer">
        <p>© 2023 Measuretank. All rights reserved.</p>
    </div>
</body>
</html>

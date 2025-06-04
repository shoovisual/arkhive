<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.5;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #1b1b1b;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="http://arkhive.trueno.co.tz" target="_blank">
                <img src="http://arkhive.trueno.co.tz/img/main-logo.png" alt="Arkhive Africa Logo" style="max-width: 150px; height: auto; ">
            </a>
            <h1>Form Submission from {{ $name }}</h1>
        </div>

        <div class="content">
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Subject:</strong> {{ $subject }}</p>
            <p><strong>Service:</strong> {{ $service }}</p>
            <div style="margin-top: 20px;">
                <strong>Message:</strong>
                <p>{{ $messageContent }}</p>
            </div>
        </div>

        <div class="footer">
            <p>This email was sent from the contact form at <span style="color: #1b1b1b">Arkhive Africa website</span>.</p>
        </div>
    </div>
</body>
</html>

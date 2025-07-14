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
            <a href="http://arkhive.africa" target="_blank">
                <img src="https://arkhive.africa/img/main-logo.png" alt="Arkhive Africa Logo" style="max-width: 150px; height: auto; ">
            </a>
            <h1>Form Submission from {{ $name }}</h1>
        </div>

        <div class="content">
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Phone:</strong> {{ $phone }}</p>
            <p><strong>Service:</strong> {{ $service }}</p>
            <p><strong>reCAPTCHA Status:</strong> ✅ Passed</p>

            @if(!empty($questions))
                <div style="margin-top: 20px;">
                    <strong>Service Questions:</strong>
                    <div style="margin-top: 10px; padding: 15px; background-color: #fff; border-radius: 5px;">
                        @foreach($questions as $question)
                            <div style="margin-bottom: 15px;">
                                <p style="margin: 0; color: #666;">
                                    <strong>Q:</strong> {{ $question }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif


            @if($messageContent)
            <div style="margin-top: 20px;">
                <strong>Additional Message:</strong>
                <p>{{ $messageContent }}</p>
            </div>
            @endif
        </div>

        <div class="footer">
            <p>This email was sent from the contact form at <span style="color: #1b1b1b">Arkhive Africa website</span>.</p>
        </div>
    </div>
</body>
</html>

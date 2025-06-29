<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        /* Base Styles */
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 0;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        /* Header */
        .header {
            background-color: #6D4C41;
            color: white;
            padding: 20px;
            font-size: 22px;
            font-weight: 600;
            text-align: center;
        }
        
        /* Content */
        .content {
            padding: 25px;
        }
        
        .message-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eeeeee;
        }
        
        .user-info {
            flex: 1;
        }
        
        .user-name {
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 5px;
        }
        
        .user-email {
            color: #3498db;
            text-decoration: none;
            font-size: 15px;
        }
        
        .message-body {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 6px;
            line-height: 1.7;
            white-space: pre-wrap;
        }
        
        /* Footer */
        .footer {
            background-color: #f5f5f5;
            padding: 15px 25px;
            text-align: center;
            font-size: 12px;
            color: #777777;
            border-top: 1px solid #eeeeee;
        }
        
        .footer a {
            color: #6D4C41;
            text-decoration: none;
        }
        
        /* Responsive */
        @media only screen and (max-width: 600px) {
            .container {
                margin: 0;
                border-radius: 0;
            }
            
            .message-header {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            New Message from Website Contact Form
        </div>
        
        <div class="content">
            <div class="message-header">
                <div class="user-info">
                    <div class="user-name">{{ $name }}</div>
                    <a href="mailto:{{ $email }}" class="user-email">{{ $email }}</a>
                </div>
                <div class="message-time">
                    {{ now()->format('F j, Y \a\t g:i A') }}
                </div>
            </div>
            
            <h3 style="margin-top: 0; margin-bottom: 10px;">Message:</h3>
            <div class="message-body">
                {{ $messageContent }}
            </div>
        </div>
        
        <div class="footer">
            This email was sent via the contact form on <a href="{{ config('app.url') }}">{{ config('app.name') }}</a>.
            <br>
            <small>Please do not reply directly to this email. Use the sender's address above.</small>
        </div>
    </div>
</body>
</html>
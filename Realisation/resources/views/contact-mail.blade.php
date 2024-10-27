<html>
    <head>
        <title>Contact Form Submission</title>
        <style>
            body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
            .container { max-width: 600px; margin: 20px auto; background: white; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 20px; }
            h1 { color: #333; }
            .info { margin: 20px 0; padding: 10px; background: #f9f9f9; border: 1px solid #ddd; border-radius: 5px; }
            .info strong { color: #555; }
            .footer { margin-top: 20px; font-size: 12px; color: #777; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>New Contact Form Submission</h1>
            <div class='info'>
                <strong>First Name:</strong> {{ $data['name'] }}<br>
                <strong>Last Name:</strong> {{ $data['lastName'] }}<br>
                <strong>Phone:</strong> {{ $data['phone'] }}<br>
                <strong>Email:</strong> {{ $data['email'] }}<br>
                <strong>Message:</strong><br>
                <p>{{ $data['msg'] }}</p>
            </div>
            <div class='footer'>
                <p>This email was generated from your contact form.</p>
            </div>
        </div>
    </body>
    </html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
</head>
<body style="margin:0; padding:0; font-family:Arial, sans-serif; background:#f4f4f4;">
    {{-- @dd($data) --}}
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td align="center" style="padding:40px 0; background:#4CAF50; color:white;">
                <h1 style="margin:0;">Welcome, Amir saifi 🎉</h1>
                <h1 style="margin:0;"> {{ $data['email'] }} 🎉</h1>
                <h1 style="margin:0;"> {{ $data['phone'] }} 🎉</h1>
                <p style="margin:5px 0 0;">We’re excited to have you on board!</p>
            </td>
        </tr>
        <tr>
            <td style="padding:30px; background:white;">
                <h2 style="color:#333; margin-top:0;">Let’s Get Started</h2>
                <p style="color:#555; line-height:1.6;">
                    Thank you for signing up with us. Your account is now active and ready to use.  
                    Explore all the features we’ve built to make your experience amazing.
                </p>
                <div style="text-align:center; margin:30px 0;">
                    <a href="{{ url('/login') }}" 
                       style="background:#4CAF50; color:white; padding:12px 30px; text-decoration:none; border-radius:25px; font-weight:bold;">
                       Go to Dashboard
                    </a>
                </div>
                <p style="color:#555; line-height:1.6;">
                    If you have any questions, feel free to reach out to our support team anytime.
                </p>
            </td>
        </tr>
        <tr>
            <td style="background:#f8f9fa; text-align:center; padding:20px; color:#777; font-size:14px;">
                &copy; {{ date('Y') }} Your Company. All rights reserved.
            </td>
        </tr>
    </table>
</body>
</html>

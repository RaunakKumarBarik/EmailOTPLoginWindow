<?php
    // Start the session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Login | Enter OTP</title>
    <style>
        body
        {
            font-family: 'Montserrat', sans-serif;
            padding: 0px;
            margin: 0px;
        }
        .container
        {
            width: auto;
            height: auto;
            margin-top: 280px;
            text-align: center;
        }
        a
        {
            font-weight: bold;
            font-size: 24px;
            line-height: 64px;
        }
        #otp
        {
            width: 120px;
            height: 24px;
            border: none;
            background: none;
            border-bottom: 2px solid #000000;
            margin-left: 16px;
            margin-right: 16px;
            color: #000000;
            outline: none;
            padding-left: 8px;
            padding-right: 8px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            letter-spacing: 2px;
        }
        #login
        {
            width: 120px;
            height: 32px;
            background: none;
            border-radius: 16px;
            font-weight: bold;
        }
        #login:hover
        {
            background: #000000;
            cursor: pointer;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="verify.php" method="post">
            <a>Hi there, please enter your</a>
            <input type="number" name="otp" id="otp" placeholder="OTP" required autocomplete="off">
            <button type="submit" id="login">LOGIN</button>
        </form>
    </div>
</body>
</html>
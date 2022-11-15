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
    <title>Email OTP Login Window</title>
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
            margin-top: 320px;
            text-align: center;
            background: none;
        }
        a
        {
            font-weight: bold;
            font-size: 24px;
            line-height: 80px;
        }
        button
        {
            width: 120px;
            height: 40px;
            background: none;
            border-radius: 24px;
            margin-left: 24px;
        }
        button:hover
        {
            background: #000000;
            color: #ffffff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <a>Login <?php if($_SESSION == "true")echo "successfull!"; else echo "failed!"; ?></a>
        <button onclick="window.open('index.php','_self');">HOME</button>
    </div>
</body>
</html>
<?php
    session_abort();
?>
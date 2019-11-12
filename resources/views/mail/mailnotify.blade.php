<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CSR ABILITY</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .flex-center .content{
            width:100%;
            border: 1px solid #e7e7e7;
            background: #e7e7e7;
        }

    </style>
</head>
<body>

<body style="margin: 0px;">
	<img src="{{ asset('assets/img/image.jpg') }}" style="width: 100%;height: auto;">
	<p style="margin: 30px 10px;padding-left: 40px; font-size: 20px;font-weight: bold;">Dear {{ $name }}</p>
	<p style="margin: 10px;padding-left: 40px;">Welcome to your new CSR ability membership.We're thrilled to be working with you. To being using your account, you first need to create a password by clicking the link below.</p>
	<center><button style="color: #007bff;background-color: #fff;border: 2px solid #007bff;padding: 10px;border-radius: 15px;font-size: 15px;cursor: pointer;margin: 20px;">Set your password</button></center>
	<p style="margin: 10px;padding-left: 40px;">Or copy and paste this link into your browser.</p>
	<p style="text-align: left;padding-left: 50px;overflow-wrap: break-word;word-wrap: break-word;-ms-word-break: break-all;word-break: break-all;word-break: break-word;-ms-hyphens: auto;-moz-hyphens: auto;-webkit-hyphens: auto;hyphens: auto;color: #007bff;padding-right: 50px;"></p>
	<p style="margin: 10px;padding-left: 40px;">Welcome to your new CSR membership</p>
	<p style="margin: 10px;padding-left: 40px;">The CSRaability Team</p>
	<div style="background-color: #7d7d7b8a;">
		<p style="padding: 10px;text-align: center;color: #fff;font-size: 15px;font-weight: bold;margin-bottom: 0px;">CSR Ability is the media platform for the global development community. <br> Building No. 30,, 2nd & 3rd floor, I Basant Lok Community Center, Vasant Vihar, New Delhi - 110057, India. To ensure delivery to your inbox, please add csrability.com to your address book.<br> Important : The email contains links that automatically logs you into your CSR ability account.</p>
	</div>
</body>





</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $sendNewsletter['headerText'] }}</title>
    <style>
        /* Reset some default styles for email clients */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        table {
            border-collapse: collapse;
        }
        table, td {
            border: 1px solid #ccc;
        }
        td {
            padding: 10px;
        }
        /* Main content styles */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        /* Button styles */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }
        /* Thank You section */
        .thank-you {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $sendNewsletter['headerText'] }}</h1>
        <p>{!! $sendNewsletter['body'] !!}</p>
        <p><a class="btn" href="{{ $sendNewsletter['url'] }}">Unsubcribe</a></p>
    </div>
    <div class="thank-you">
        <p>{{ $sendNewsletter['thankYou'] }}</p>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رسالة جديدة</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            margin: 10px 0;
            color: #666;
        }

        strong {
            color: #333;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>رسالة جديدة</h1>
    <p><strong>الاسم:</strong> {{ $post['name'] }}</p>
    <p><strong>البريد الإلكتروني:</strong> {{ $post['email'] }}</p>
    <p><strong>عنوان الموضوع:</strong> {{ $post['subject'] }}</p>
    <p><strong>الرسالة:</strong> {{ $post['messsage'] }}</p>
</div>
</body>
</html>

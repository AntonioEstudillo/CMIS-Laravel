<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f8f8;
        }
        .header {
            background-color: #f1f1f1;
            padding: 20px;
        }
        .title {
            font-size: 24px;
            color: #333;
        }
        .content {
            padding: 20px;
        }
        .content p {
            font-size: 16px;
            color: #666;
        }
        .footer {
            background-color: #f5f5f5;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">Solicitud de información</h1>
        </div>
        <div class="content">
            <p>Nombre del usuario: {{$data['name']}},</p>
            <p>Correo electronico del usuario: {{$data['email']}}</p>
            <p>Telefono del usuario: {{$data['telefono']}}</p>
            <p> {{$data['mensaje']}} </p>
        </div>
        <div class="footer">
            CMIS 2024
        </div>
    </div>
</body>
</html>


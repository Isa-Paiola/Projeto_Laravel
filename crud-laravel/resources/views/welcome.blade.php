<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { height: 100%; margin:0; }
        .bg-wave {
            background: linear-gradient(160deg, #D6EFFF, #AFCBFF); /* azul bebê claro + cinza azulado */
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #2d3e50; /* cinza azulado escuro para contraste */
            font-family: 'Arial', sans-serif;
            text-align: center;
        }
        .btn-custom {
            border-radius: 25px;
            width: 120px;
            margin: 10px;
            border: 2px solid #2d3e50; /* borda cinza azulado */
            color: #2d3e50;
            font-weight: bold;
            transition: 0.3s ease;
        }
        .btn-custom:hover { 
            background-color: #7DA0C8; /* cinza azulado médio */
            color: white; 
            border-color: #7DA0C8;
        }
    </style>
</head>
<body>
<div class="bg-wave">
    <h1>Bem-vinda(o)!</h1>
    <p>Entre ou cadastre-se para começar</p>
    <div>
        <a href="{{ route('login') }}" class="btn btn-custom">Entrar</a>
        <a href="{{ route('register') }}" class="btn btn-custom">Cadastrar</a>
    </div>
</div>
</body>
</html>

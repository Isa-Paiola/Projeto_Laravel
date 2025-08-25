<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { height: 100%; margin:0; }
        .bg-wave {
            background: linear-gradient(160deg, #D6EFFF, #AFCBFF); /* azul bebê bem claro + cinza azulado claro */
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            color: #2d3e50; /* texto em cinza escuro para contraste */
            text-align: center;
        }
        .btn-blue {
            background-color: #AFCBFF; /* azul claro */
            color: #2d3e50; /* cinza azulado */
            border-radius: 20px;
            margin: 5px;
            font-weight: bold;
            transition: 0.3s ease;
        }
        .btn-blue:hover { 
            background-color: #7DA0C8; /* cinza azulado médio */
            color: white;
        }
    </style>
</head>
<body>
<div class="bg-wave">
    <div>
        <h2>Bem vinda, você está logada!</h2>
        <!-- <a href="{{ route('users.index') }}" class="btn btn-blue">Usuários</a> -->
        <a href="{{ route('home') }}" class="btn btn-blue">Sair</a>
    </div>
</div>
</body>
</html>

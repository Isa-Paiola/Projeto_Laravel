<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { height: 100%; margin:0; }
        .bg-wave {
            background: linear-gradient(160deg, #D6EFFF, #AFCBFF); /* azul bebê claro + cinza azulado */
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }
        .card-register {
            background: white;
            border-radius: 25px;
            padding: 30px;
            width: 320px;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.2);
        }
        .btn-blue {
            background-color: #AFCBFF; /* azul claro */
            color: #2d3e50; /* cinza azulado escuro */
            border-radius: 20px;
            width: 100%;
            font-weight: bold;
            transition: 0.3s ease;
        }
        .btn-blue:hover { 
            background-color: #7DA0C8; /* cinza azulado médio */
            color: white; 
        }
        a { 
            color: #7DA0C8; /* link em cinza azulado */
            text-decoration:none; 
            transition: 0.3s ease;
        }
        a:hover { color: #2d3e50; }
    </style>
</head>
<body>
<div class="bg-wave">
    <div class="card-register">
        <h3 class="mb-3 text-center">Cadastrar</h3>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" placeholder="Nome completo" class="form-control mb-2" required>
            <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
            <input type="password" name="password" placeholder="Senha" class="form-control mb-2" required>
            <button class="btn btn-blue mt-2">Cadastrar</button>
        </form>
        <p class="mt-2 text-center">Já tem conta? <a href="{{ route('login') }}">Entrar</a></p>
    </div>
</div>
</body>
</html>

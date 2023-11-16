<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>
        <a href="/cadastra-usuario">Criar conta</a>
        <a href="/login">Login</a>
    </div>

    <div>
        <a href="/cria-post">Nova Postagem</a>
    </div>
<h1>Posts:</h1>
<div>
    <div>
        Postagem - {{$post->id}}
    </div>
    {{$post->mensagem}}
</div>
@endforeach
</body>
</html>
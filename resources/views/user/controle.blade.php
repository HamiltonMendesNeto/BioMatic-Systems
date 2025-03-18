<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>teste</title>
</head>
<body>

    <a href="{{route('user.index')}}"> Voltar para Menu </a>

    <h2>Lista de usuários cadastrados</h2>

    @forelse ($user as $bduser)
    ID: {{$bduser->id}} <br>
    Nome: {{$bduser->name}} <br>
    E-mail: {{$bduser->email}} <br>
    <a href="{{route('user.show', ['user' => $bduser->id])}}">Visualizar</a><br>
    <hr>    

    @empty
        
    @endforelse
</body>
</html>

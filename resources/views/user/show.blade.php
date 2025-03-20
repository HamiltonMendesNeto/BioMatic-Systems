<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizar Usuário</title>
</head>
<body>

    <a href="{{route('user.controle')}}">Lista de Usuários</a> <br>
    <a href="{{route('user.editar', ['user' => $user->id])}}">Editar Usuário</a><br>

    <h1>Visualizar Usuário</h1>

    ID: {{ $user->id}} <br>
    Nome: {{ $user->name}} <br>
    E-mail: {{ $user->email}} <br>

    {{-- Cadastro em: {{$user->created_at}} --}}
    Cadastro em: {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s')}}<br>
    Editado em: {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s')}}<br>


</body>
</html>
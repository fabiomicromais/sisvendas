<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edição de clientes</title>
</head>
<body>
    <form action="{{route('update', ['id' => $cliente->id])}}" method="post">
        @csrf
        @method('PUT')
        
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{$cliente->nome}}">

        <label for="debito">debito</label>
        <input type="text" name="debito" id="debito" value="{{$cliente->debito}}">

        <label for="descricao">descricao</label>
        <textarea name="descricao" id="" cols="30" rows="10">{{$cliente->descricao}}</textarea>

        <button type="submit">ALterar</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>
</head>
<body>
    <form action="{{route('store')}}" method="post">
        @csrf
        <label for="nome">Nome do cliente</label>
        <input type="text" name="nome" id="nome" placeholder="Digit o nome">
        <label for="debito">Débito do Cliente</label>
        <input type="text" name="debito" id="debito" placeholder="digite o debito">
        <label for="descricao"></label>
        <textarea name="descricao" id="descricao" cols="30" rows="10">descricao</textarea>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
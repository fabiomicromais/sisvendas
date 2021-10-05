<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endereco</title>
</head>
<body>
        <form action="{{route('enderecostore')}}" method="post">
            @csrf
            <label for="logradouro">Logradouro</label>
            <input type="text" name="logradouro" id="logradouro">
            <label for="bairro">Bairoo</label>
            <input type="text" name="bairro" id="bairro">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade">
            <label for="uf">UF</label>
            <input type="text" name="uf" id="uf">
            {{$cliente_id}}
            <input type="hidden" name="cliente_id" value={{$cliente_id}}>
            
            <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
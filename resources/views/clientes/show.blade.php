<p>visualização de clientes</p>

@foreach($clientes as $cliente)
  <p>Nome do cliente: {{$cliente->nome}} </p>
  <p>debito: {{$cliente->debito}}</p>
  <p>descricao: {{$cliente->descricao}}</p>
@endforeach


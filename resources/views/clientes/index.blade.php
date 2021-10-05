<p>Dados dos clientes</p>

@foreach($clientes as $cliente)
  <p>Nome do cliente:<a href="{{route('edit', ['id' => $cliente->id])}}">{{$cliente->nome}}</a> </p>
  <p>debito: {{$cliente->debito}}</p>
  <p>descricao: {{$cliente->descricao}}</p>
  
  <form action="{{route('delete', ['id' => $cliente->id])}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
              </form>
@endforeach

            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                    <p class="msg"> {{ session('msg') }}</p>
                    @endif
                </div>
            </div>    
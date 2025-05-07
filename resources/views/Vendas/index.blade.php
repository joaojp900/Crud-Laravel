
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container">
     <div class="p-2 g-col-6">
       <a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover " href="{{route('Produtos.welcome')}} ">CRUD</a></li>
     </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="{{route('Produtos.create')}} ">Produtos</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('funcionario.index')}}">Funcionario</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('cliente.index')}}">Cliente</a></li>
        <li class="nav-item"><a class="nav-link" href=" {{route('vendas.index')}}">Baixas no estoque</a></li>
      </ul>
      
    </div>
  </div>
</nav>

<div class="container">
    <div class="margin tp-5"><br>
        <div class="max-w-3xl mx-auto mt-10 bg-white p-8 shadow-md rounded-lg">
            <div class="container"> 
              <div class="margin mt-5">
                <button type="button" class="btn btn-success"><a class="link-light link-offset-2 link-underline link-underline-opacity-0" href="{{route('vendas.create')}}">Adicionar Baixa</a></button>
              </div>
          </div>
        <div class="container"> 
            <div class="margin mt-5">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Nome Cliente</th>
                      <th scope="col">Produto</th>
                      <th scope="col">Quantidade</th>
                      <th scope="col">Data de Compra</th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($vendas as $venda)
                        
              <tr>
                      <td>{{$venda->Cliente}}</td>
                      <td>{{$venda->Produtos}}</td>
                      <td>{{$venda->quantidade}}</td>    
                      <td>{{$venda->created_at}}</td>
                    
                    
                      <td>
                        <form action="{{route('vendas.destroy', $venda->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                      </td>

                </tr>
    
    
                    @endforeach
                  </tbody>
                </table>
            </div>

        </div>
      </div>
    </div>
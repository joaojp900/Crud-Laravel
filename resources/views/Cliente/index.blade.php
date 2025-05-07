
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
            <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Clientes</h1>
            
            <div class="container"> 
              <div class="margin mt-5">
                <button type="button" class="btn btn-success"><a class="link-light link-offset-2 link-underline link-underline-opacity-0" href="{{route('cliente.create')}}">Adicionar Novo Cliente</a></button>
              </div>
          </div>
        <div class="container"> 
          
            <div class="margin mt-5">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Nome</th>
                      <th scope="col">Email</th>
                      <th scope="col">CPF</th>
                      <th scope="col">Senha</th>
                      <th scope="col">Data de afiliação</th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($cliente as $clientes)
                        
                    <tr>
                      <th>{{$clientes->Nome}}</th>
                      <td>{{$clientes->Email}}</td>
                      <td>{{$clientes->Cpf}}</td>
                      <td>{{$clientes->Senha}}</td>    
                      <td>{{$clientes->created_at}}</td>
                      
                      <td><td>
                        <button type="button" class="btn btn-primary">
                            <a class="link-light link-offset-2 link-underline link-underline-opacity-0" href="{{ route('cliente.edit', ['id' => $clientes->id]) }}">Atualizar</a>
                        </button>
                    </td>
                    
                      <td>
                        <form action="{{route('cliente.destroy', $clientes->id)}}" method="POST">
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
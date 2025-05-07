<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de estoque</title>
    <link rel="shortcut icon" href="{{asset('img/cursoc.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('img/cursoc.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!--Navbar-->
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
    <div class="margin mt-5">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Produto</th>
              <th scope="col">Estoque</th>
              <th scope="col">Descrição</th>
              <th scope="col">Valor</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($produtos as $produto)
    
            <tr>
              <th>{{$produto->Nome_Produto}}</th>
              <td>{{$produto->Estoque}}</td>
              <td>{{$produto->Descricao}}</td>
              <td> Preço: R$ {{ number_format($produto->Preco, 2, ',', '.') }}</td>

              <td>
                <button type="button" class="btn btn-primary"><a class="link-light link-offset-2 link-underline link-underline-opacity-0" href="{{route('Produtos.show', ['produto' => $produto->id])}}">Visualizar</a></button>
              </td>
              <td>
                <button type="button" class="btn btn-primary">
                    <a class="link-light link-offset-2 link-underline link-underline-opacity-0" href="{{ route('Produtos.edit', ['id' => $produto->id]) }}">Atualizar</a>
                </button>
            </td>
            
            </td>
              <td>
                <form action="{{ route('Produtos.destroy', $produto->id) }}" method="POST">
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
 

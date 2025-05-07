<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
      <div class="container mt-5"> 
          <section class="p-4 bg-light border rounded" onclick="toggleArticles()" style="cursor: pointer;">
              <h4 class="mb-0"> Clique aqui para ver mais sobre o Produto</h4>
          </section>

          <div class="article-content mt-3 d-none p-4 border rounded">
              <div class="mt-auto font-weight-bold text-center"> 
                  <h3>  {{ $produtos->Nome_Produto }}</h3>
                  <p>Descrição Produto: {{ $produtos->Descricao }}</p>
                  
                  
                  <p>Quantidade estoque: {{$produtos->Estoque}}</p>
                  <p >
                      Preço: R$ {{ number_format($produtos->Preco, 2, ',', '.') }}
                  </p>
              </div>
          </div> 
      </div>
  </div>
<script>
    function toggleArticles() {
       let articles = document.querySelectorAll(".article-content"); 
        
        articles.forEach(article => {
            article.classList.toggle("d-none"); // Alterna a visibilidade de todos
        });
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

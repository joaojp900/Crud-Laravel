
<div class="container"> 
    <div class="margin tp-5"> 
        <form action="{{ route('Produtos.store') }}" method="POST" class="space-y-6">
            @csrf

            <div class="mb-3">
                <label for="Nome_Produto" class="form-label">Nome do Produto:</label>
                <input type="text" name="Nome_Produto" value="{{ old('Nome_Produto') }}" class="form-control" placeholder="Nome do Produto">
                @error('Nome_Produto') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="Descricao" class="form-label">Descrição:</label>
                <input type="text" name="Descricao" value="{{ old('Descricao') }}" class="form-control" placeholder="Descrição">
                @error('Descricao') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="Quantidade" class="form-label">Estoque:</label>
                <input type="number" name="Estoque" value="{{ old('Estoque') }}" class="form-control" placeholder="Estoque">
                @error('Estoque') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="Preco" class="form-label">Preço:</label>
                <input type="number" name="Preco" value="{{ old('Preco') }}" class="form-control" placeholder="Preço">
                @error('Preco') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-primary w-100">
                    Salvar
                </button>
            </div>
        </form>
    </div>
</div>

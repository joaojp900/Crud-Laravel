<div class="container mt-5"> 
    <h2 class="mb-4">Registrar Venda</h2>

    <form action="{{ route('vendas.store') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Nome do Cliente -->
        <div class="mb-3">
            <label for="Nome_Cliente" class="form-label">Nome do Cliente:</label>
            <input type="text" name="Nome_Cliente" value="{{ old('Nome_Cliente') }}" class="form-control" placeholder="Digite o nome do cliente">
            @error('Nome_Cliente') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <!-- Seleção do Produto -->
        <div class="mb-3">
            <label for="Produto_id" class="form-label">Produto:</label>
            <select name="Produto_id" class="form-select">
                <option value="">Selecione um produto</option>
                @foreach ($produtos as $produto)
                    <option value="{{ $produto->id }}" {{ old('Produto_id') == $produto->id ? 'selected' : '' }}>
                        {{ $produto->Nome_Produto }} (Estoque: {{ $produto->Estoque }})
                    </option>
                @endforeach
            </select>
            @error('Nome_Produto') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <!-- Quantidade -->
        <div class="mb-3">
            <label for="Quantidade" class="form-label">Quantidade:</label>
            <input type="number" name="Quantidade" value="{{ old('Quantidade') }}" class="form-control" placeholder="Informe a quantidade" min="1">
            @error('Quantidade') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <!-- Botão de envio -->
        <div>
            <button type="submit" class="btn btn-primary w-100">
                Registrar Venda
            </button>
        </div>
    </form>
</div>

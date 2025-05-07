<div class="container"> 
    <div class="margin tp-5">
        <form action="{{ route('funcionario.update', ['id' => $funcionario->id]) }}" method="POST"   class="space-y-6">
            @csrf 
               @method('PUT')
                <div class="mb-3">
                    <label for="Nome" class="form-label">Nome do Produto:</label>
                    <input type="text" name="Nome" value="{{$funcionario->Nome ?? old('Nome')}}" class="form-control">
                    @error('Nome') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>
            
                <div class="mb-3">
                    <label for="Email" class="form-label">Email:</label>
                    <input type="text" name="Email" value="{{ $funcionario->Email ?? old('Email')}}" class="form-control">
                    @error('Email') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>
            
                <div class="mb-3" style="position: relative;">
                    <label for="Senha" class="form-label">Senha:</label>
                    <input type="password" name="Senha" id="Senha" value="{{$funcionario->Senha}}" class="form-control">
                    <span class="toggle-password" onclick="esconder()" style="position: absolute; top: 38px; right: 15px; cursor: pointer;">👁️</span>
                    @error('Senha')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
            
            
                <div>
                    <button type="submit" class="btn btn-primary w-100">
                        Salvar
                    </button>
                </div>
            </form>
        </div>
   </div>

   <script>
    function esconder() {
        const input = document.getElementById('Senha');
        const icon = document.querySelector('.toggle-password');

        if (input.type === 'password') {
            input.type = 'text';
            icon.textContent = '🤯';
        } else {
            input.type = 'password';
            icon.textContent = '👁️';
        }
    }
</script>
     
 
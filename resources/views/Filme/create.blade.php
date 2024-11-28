<form action="{{ url('filme') }}" method="POST">
    @csrf
    <input type="text" name="titulo" id="titulo" placeholder="Name" required>
    <input type="text" name="ano" id="ano" placeholder="ano" required>
    <input type="text" name="genero" id="genero" placeholder="genero" required>

    <div class="mb-5">
            <label for="diretor_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diretor</label>
            <select name="diretor_id" id="diretor_id" required>
                <option value="">Select a diretor</option>
                @foreach ($diretor as $entity)
                    <option value="{{ $entity->id }}">{{ $entity->name }}</option>
                @endforeach
            </select>
        </div>

    <button type="submit">Criar Filme</button>
</form>
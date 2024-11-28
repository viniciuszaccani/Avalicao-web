<form action="{{ url('filme' .$filme->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="titulo" id="titulo" placeholder="Name" value="{{ $filme->titulo }}" required>
    <input type="text" name="ano" id="ano" placeholder="Name" value="{{ $filme->ano }}" required>
    <input type="text" name="genero" id="genero" placeholder="Name" value="{{ $filme->genero }}" required>
    
    <button type="submit">Editar Filme</button>
</form>
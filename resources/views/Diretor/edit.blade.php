<form action="{{ url('diretor/'.$diretor->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" id="name" placeholder="Name" value="{{ $diretor->name }}" required>
    <input name="descricao" id="descricao" placeholder="Descricao" value="{{ $diretor->descricao }}" required></input>
    <input type="text" name="nascimento" placeholder="nascimento" value="{{ $diretor->nascimento }}" required>
    
    <button type="submit">Editar Diretor</button>
</form>
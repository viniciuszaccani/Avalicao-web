<form action="{{ url('diretor') }}" method="POST">
    @csrf
    <input type="text" name="name" id="name" placeholder="Name" required>
    <input name="descricao" id="descricao" placeholder="Description" required></input>
    <input type="text" name="nascimento" placeholder="nascimento" required>
    <button type="submit">Criar Diretor</button>
</form>
@foreach($diretor as $entity)
    <div>
        <h3>{{ $entity->name }}</h3>
        <p>{{ $entity->descricao }}</p>
        <p>{{ $entity->nascimento }}</p>
        <a href="{{ url('diretor/'.$entity->id.'/edit') }}">Edit</a>
        <form action="{{ url('diretor/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
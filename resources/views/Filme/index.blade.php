@foreach($filme as $entity)
    <div>
        <h3>{{ $entity->titulo }}</h3>
        <p>{{ $entity->genero }}</p>
        <p>{{ $entity->ano }}</p>
        @if(isset($entity->diretor))
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $entity->diretor->name }}</span>
                @else
                    <span class="text-sm text-gray-500 dark:text-gray-400">Sem diretor</span>
                @endif
                <br>
        <a href="{{ url('filme/'.$entity->id.'/edit') }}">Edit</a>
        <form action="{{ url('filme/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <hr>
    </div>
@endforeach
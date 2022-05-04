<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Título</th>
            <th scope="col">Descripción</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>

    <h3>Hola Livewire ...</h3>
    <tbody>
        @foreach ($post as $posts)
            <tr>
                <th scope="row">{{ $posts->id }}</th>
                <td>{{ $posts->title }}</td>
                <td>{{ $posts->body }}</td>
                <td>
                    <button wire:click="edit({{$posts->id}})" class="btn btn-primary">
                        Editar
                    </button>
                </td>
                <td>
                    <button wire:click="destroy({{ $posts->id }})" class="btn btn-danger">
                        Eliminar
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {{ $post->links() }}
</div>

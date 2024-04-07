@extends('layouts.panel')

@section('title', 'Comentarios')

@section('content')
<main>
    <div class="container mt-3">
        <h1 class="mt-4">
            <a href="{{ route('dashboard') }}" style="color: #212529; text-decoration: none; margin-right: 10px;"><i class="fas fa-arrow-left"></i></a>
            Comentarios
        </h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active" style="display: flex; align-items: center;">
                <div>
                    Mostrando <b>{{ $comments->count() }}</b> resultados
                    de un total de <b>{{ $comments->total() }}</b>
                </div>
            </li>
        </ol>

        <div class="d-md-flex justify-content-md-end">
    <form action="{{ route('comment.index') }}" method="GET">
        <div class="btn-group">
            <input type="text" name="text" class="form-control">
            <input type="submit" value="Buscar" class="btn btn-primary">
        </div>
    </form>
</div>

        <table class="table table-hover" style="border: 2px solid #212529; color: #212529;">
            <thead>
                <tr>
                    <th>Registro</th>
                    <th>Id</th>
                    <th>Comentario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comments as $comment)
                <tr>
                    <td>{{ $loop->index + $comments->firstItem() }}</td>
                    <td>#{{ $comment->id }}</td>
                    <td>{{ $comment->text }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('comment-edit', $comment->id) }}" class="btn btn-primary" role="button"><i class="fas fa-edit"></i></a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteCommentModal{{$comment->id}}"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </td>
                </tr>
                <!-- Modal para eliminar categoría -->
                <div class="modal fade" id="deleteCommentModal{{$comment->id}}" tabindex="-1" aria-labelledby="deleteCommentModalLabel{{$comment->id}}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteCommentModalLabel{{$comment->id}}">Eliminar Comentario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>¿Estás seguro de que deseas eliminar el comentario <strong>{{ $comment->text }}</strong>?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <form action="{{ route('comment-delete', $comment->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="ulpgcds-pager">
                        {{-- Enlaces de paginación --}}
                        {{ $comments->links('pagination::bootstrap-5') }}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div> 
</main>

<!-- Modal para agregar categoría -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Añadir Commentario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para agregar categoría -->
                <form action="{{ route('comment-store') }}" method="POST">
                    @csrf
                    <!-- Campos del formulario -->
                    <div class="mb-3">
                        <label for="text" class="form-label">Comentario</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

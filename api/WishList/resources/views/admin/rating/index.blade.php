@extends('layouts.panel')

@section('title', 'Calificaciones')

@section('content')
<main>
    <div class="container mt-3">
        <h1 class="mt-4">
            <a href="{{ route('dashboard') }}" style="color: #212529; text-decoration: none; margin-right: 10px;"><i class="fas fa-arrow-left"></i></a>
            Calificaciones
        </h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active" style="display: flex; align-items: center;">
                <div>
                    Mostrando <b>{{ $ratings->count() }}</b> resultados
                    de un total de <b>{{ $ratings->total() }}</b>
                </div>
            </li>
        </ol>
        
        <div class="d-md-flex justify-content-md-end">
    <form action="{{ route('rating.index') }}" method="GET">
        <div class="btn-group">
            <input type="text" name="rating" class="form-control">
            <input type="submit" value="Buscar" class="btn btn-primary">
        </div>
    </form>
</div>

        <div class="mb-3">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addRatingModal"><i class="fas fa-plus"></i> Añadir Regalo</button>
        </div>

        <div class="table-responsive">
            <table class="table table-hover" style="border: 2px solid #212529; color: #212529;">
                <thead>
                    <tr>
                        <th>Registro</th>
                        <th>Id</th>
                        <th>Calificación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ratings as $rating)
                    <tr>
                        <td>{{ $loop->index + $ratings->firstItem() }}</td>
                        <td>#{{ $rating->id }}</td>
                        <td>
                            {{ $rating->rating }} 
                            @for ($i = 0; $i < $rating->rating; $i++)
                            <i class="fas fa-star" style="color: gold;"></i>
                            @endfor
                        </td>

                        <td>
                            <div class="btn-group">
                                <a href="{{ route('rating.edit', $rating->id) }}" class="btn btn-primary" role="button"><i class="fas fa-edit"></i></a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteRatingModal{{$rating->id}}"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </td>
                    </tr>
                    <!-- Modal para eliminar calificación -->
                    <div class="modal fade" id="deleteRatingModal{{$rating->id}}" tabindex="-1" aria-labelledby="deleteRatingModalLabel{{$rating->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteRatingModalLabel{{$rating->id}}">Eliminar Calificación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Estás seguro de que deseas eliminar la calificación con id <strong>#{{ $rating->id }}</strong>?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <form action="{{ route('rating.destroy', $rating->id) }}" method="POST" style="display: inline;">
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
                        <td colspan="3" class="ulpgcds-pager">
                            {{-- Enlaces de paginación --}}
                            {{ $ratings->links('pagination::bootstrap-5') }}
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div> 
</main>

<!-- Modal para agregar regalo -->
<div class="modal fade" id="addRatingModal" tabindex="-1" aria-labelledby="addRatingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRatingModalLabel">Añadir una Calificacion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para agregar regalo -->
                <form action="{{ route('rating.store') }}" method="POST">
                    @csrf
                    <!-- Campos del formulario -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Calificacion</label>
                        <input type="text" class="form-control" id="name" name="rating" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

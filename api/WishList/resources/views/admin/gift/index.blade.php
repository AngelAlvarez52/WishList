@extends('layouts.panel')

@section('title', 'Regalos')

@section('content')
<main>
    <div class="container mt-3">
        <h1 class="mt-4">
            <a href="{{ route('dashboard') }}" style="color: #212529; text-decoration: none; margin-right: 10px;"><i class="fas fa-arrow-left"></i></a>
            Regalos
        </h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active" style="display: flex; align-items: center;">
                <div>
                    Mostrando <b>{{ $gifts->count() }}</b> resultados
                    de un total de <b>{{ $gifts->total() }}</b>
                </div>
            </li>
        </ol>
        
        <div class="mb-3">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addGiftModal"><i class="fas fa-plus"></i> Añadir Regalo</button>
        </div>

        <div class="table-responsive">
            <table class="table table-hover" style="border: 2px solid #212529; color: #212529;">
                <thead>
                    <tr>
                        <th>Registro</th>
                        <th>Id</th>
                        <th>Regalo</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Imagen</th>
                        <th style="max-width: 150px;">Url</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gifts as $gift)
                    <tr>
                        <td>{{ $loop->index + $gifts->firstItem() }}</td>
                        <td>#{{ $gift->id }}</td>
                        <td>{{ $gift->name }}</td>
                        <td>{{ $gift->description }}</td>
                        <td>{{ $gift->price }}</td>
                        <td>{{ $gift->image }}</td>
                        <td style="max-width: 150px; overflow: hidden; text-overflow: ellipsis;">{{ $gift->url }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('gift-edit', $gift->id) }}" class="btn btn-primary" role="button"><i class="fas fa-edit"></i></a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteGiftModal{{$gift->id}}"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </td>
                    </tr>
                    <!-- Modal para eliminar categoría -->
                    <div class="modal fade" id="deleteGiftModal{{$gift->id}}" tabindex="-1" aria-labelledby="deleteGiftModalLabel{{$gift->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteGiftModalLabel{{$gift->id}}">Eliminar Regalo</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Estás seguro de que deseas eliminar el regalo <strong>{{ $gift->name }}</strong>?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <form action="{{ route('gift-delete', $gift->id) }}" method="POST" style="display: inline;">
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
                            {{ $gifts->links('pagination::bootstrap-5') }}
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div> 
</main>

<!-- Modal para agregar categoría -->
<div class="modal fade" id="addGiftModal" tabindex="-1" aria-labelledby="addGiftModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addGiftModalLabel">Añadir Regalo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para agregar categoría -->
                <form action="{{ route('gift-store') }}" method="POST">
                    @csrf
                    <!-- Campos del formulario -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

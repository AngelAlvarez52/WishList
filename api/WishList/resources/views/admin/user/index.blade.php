@extends('layouts.panel')

@section('title', 'Usuarios')

@section('content')
<main>
    <div class="container mt-3">
        <h1 class="mt-4">
            <a href="{{ route('dashboard') }}" style="color: #212529; text-decoration: none; margin-right: 10px;"><i class="fas fa-arrow-left"></i></a>
            Usuarios
        </h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active" style="display: flex; align-items: center;">
                <div>
                    Mostrando <b>{{ $users->count() }}</b> resultados
                    de un total de <b>{{ $users->total() }}</b>
                </div>
            </li>
        </ol>
        
        <div class="d-md-flex justify-content-md-end">
    <form action="{{ route('user.index') }}" method="GET">
        <div class="btn-group">
            <input type="text" name="name" name="surname" class="form-control">
            <input type="submit" value="Buscar" class="btn btn-primary">
        </div>
    </form>
</div>

        <div class="mb-3">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addGiftModal"><i class="fas fa-plus"></i> Añadir Usuario</button>
        </div>

        <div class="table-responsive">
            <table class="table table-hover" style="border: 2px solid #212529; color: #212529;">
                <thead>
                    <tr>
                        <th>Registro</th>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Nivel</th>
                        @if(auth()->user()->level_id == 3)
                        <th>Acciones</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->index + $users->firstItem() }}</td>
                        <td>#{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->level_id }}</td>
                        <td>
                        @if(auth()->user()->level_id == 3)
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteGiftModal{{$user->id}}"><i class="fas fa-trash-alt"></i></button>
                            </div>
                            @endif
                        </td>
                    </tr>
                    <!-- Modal para eliminar categoría -->
                    <div class="modal fade" id="deleteGiftModal{{$user->id}}" tabindex="-1" aria-labelledby="deleteGiftModalLabel{{$user->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteGiftModalLabel{{$user->id}}">Eliminar Usuario</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Estás seguro de que deseas eliminar a este usuario? <strong>{{ $user->name }}</strong>?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: inline;">
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
                            {{ $users->links('pagination::bootstrap-5') }}
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
                <h5 class="modal-title" id="addGiftModalLabel">Añadir Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para agregar categoría -->
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <!-- Campos del formulario -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="surname" name="surname" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="level_id" class="form-label">Nivel de cuenta</label>
                        <select class="form-select" id="level_id" name="level_id" required>
                            <option value="2">Empleado</option>
                            @if(auth()->user()->level_id == 3)
                            <option value="3">Administrador</option>
                            @endif
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

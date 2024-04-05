@extends('layouts.panel')

@section('title', 'Editar Tienda')

@section('content')
<main>
    <div class="container mt-3">
        <h1 class="mt-4">
            <a href="{{ route('shop.index') }}" style="color: #212529; text-decoration: none; margin-right: 10px;"><i class="fas fa-arrow-left"></i></a>
            Editar Tienda {{ $shop->name }}
        </h1>
        <div class="mt-4">
            <form action="{{ route('shop.update', $shop->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{ $shop->id }}" readonly>
                </div>
                <!-- Campos del formulario -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $shop->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="adress" class="form-label">Direccion</label>
                    <textarea class="form-control" id="adress" name="adress"  required>{{ $shop->adress }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="cel" class="form-label">Telefono</label>
                    <input type="number" class="form-control" id="cel" name="cel" value="{{ $shop->cel }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>
        </div>
    </div>
</main>
@endsection

@extends('layouts.panel')

@section('title', 'Editar Regalo')

@section('content')
<main>
    <div class="container mt-3">
        <h1 class="mt-4">
            <a href="{{ route('gift.index') }}" style="color: #212529; text-decoration: none; margin-right: 10px;"><i class="fas fa-arrow-left"></i></a>
            Editar Regalo {{ $gift->name }}
        </h1>
        <div class="mt-4">
            <form action="{{ route('gift-update', $gift->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{ $gift->id }}" readonly>
                </div>
                <!-- Campos del formulario -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $gift->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $gift->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $gift->price }}" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="currentImage" class="form-label">Imagen Actual</label>
                    <div>
                        <!-- Suponiendo que $gift->image contenga la URL de la imagen -->
                        <img src="{{ $gift->image }}" alt="Imagen actual" style="max-width: 200px; max-height: 200px;">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Cambiar Imagen</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <!-- No es requerido cambiar la imagen cada vez que se edita -->
                </div>
                <div class="mb-3">
                    <label for="url" class="form-label">URL</label>
                    <input type="url" class="form-control" id="url" name="url" value="{{ $gift->url }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>
        </div>
    </div>
</main>
@endsection

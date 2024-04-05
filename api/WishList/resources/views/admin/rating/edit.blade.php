@extends('layouts.panel')

@section('title', 'Editar Calificación')

@section('content')
<main>
    <div class="container mt-3">
        <h1 class="mt-4">
            <a href="{{ route('rating.index') }}" style="color: #212529; text-decoration: none; margin-right: 10px;"><i class="fas fa-arrow-left"></i></a>
            Editar Calificación {{ $rating->id }}
        </h1>
        <div class="mt-4">
            <form action="{{ route('rating.update', $rating->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{ $rating->id }}" readonly>
                </div>
                <!-- Campo de calificación -->
                <div class="mb-3">
                    <label for="rating" class="form-label">Calificación</label>
                    <input type="text" class="form-control" id="rating" name="rating" value="{{ $rating->rating }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>
        </div>
    </div>
</main>
@endsection

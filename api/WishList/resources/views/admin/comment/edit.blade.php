@extends('layouts.panel')

@section('title', 'Editar Comentario')

@section('content')
<main>
    <div class="container mt-3">
    <h1 class="mt-4">
            <a href="{{ route('comment.index') }}" style="color: #212529; text-decoration: none; margin-right: 10px;"><i class="fas fa-arrow-left"></i></a>
            Editar Comentario {{ $comment->text }}
        </h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('comment-update', $comment->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="text" class="form-label">Comentario</label>
                        <input type="text" name="text" class="form-control" value="{{ $comment->text }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

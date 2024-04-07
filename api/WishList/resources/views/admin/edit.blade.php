@extends('layouts.panel')

@section('title', 'Editar usuario')

@section('category')

<h1 class="mt-4">
    <a href="{{ route('dashboard') }}" style="color: #212529; text-decoration: none; margin-right: 10px;"><i class="fas fa-arrow-left"></i></a>
    Perfil de usuario
</h1>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Perfil de usuario') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('edit.user') }}">
                        @csrf
                        @method('PUT') <!-- Importante para realizar una actualización -->

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ auth()->user()->name }}" required autocomplete="name" autofocus readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="surname" class="col-md-4 col-form-label text-md-end">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ auth()->user()->surname }}" required autocomplete="surname" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" required autocomplete="email" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ auth()->user()->phone }}" required autocomplete="phone" readonly>
                            </div>
                        </div>

                        <!-- Campos de contraseña y confirmación de contraseña ocultos inicialmente -->
                        <div id="passwordFields" style="display: none;">
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <!-- Fin de los campos de contraseña y confirmación de contraseña -->

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" class="btn btn-primary" id="editButton">
                                    {{ __('Editar') }}
                                </button>
                                <button type="submit" class="btn btn-primary" style="display: none;">
                                    {{ __('Guardar') }}
                                </button>
                                <!-- Botón "Cancelar" con estilo rojo -->
                                <button type="button" class="btn btn-danger ml-2" id="cancelButton" style="display: none;">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('editButton').addEventListener('click', function() {
        var inputs = document.querySelectorAll('input');
        inputs.forEach(function(input) {
            input.removeAttribute('readonly');
        });
        document.querySelector('button[type="submit"]').style.display = 'inline-block';
        document.getElementById('passwordFields').style.display = 'block'; // Mostrar los campos de contraseña
        document.getElementById('cancelButton').style.display = 'inline-block'; // Mostrar el botón de cancelar
        this.style.display = 'none';
    });

    // Función para cancelar la edición y revertir los cambios
    document.getElementById('cancelButton').addEventListener('click', function() {
        window.location.reload(); // Simplemente recargamos la página para revertir los cambios
    });
</script>

@endsection

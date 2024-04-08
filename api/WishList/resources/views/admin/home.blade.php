@extends('layouts.panel')

@section('title', 'Inicio')

@section('category')

<h1 class="mt-4" style="color: #212529">Bienvenido 
    @auth
        {{ auth()->user()->name }}
    @endauth
</h1>

@endsection

@section('content')

<div class="row">
    @if(auth()->user()->level_id == 1)
        <div class="col-xl-3 col-md-6 category-card" data-title="Categorias">
            <div id="card1" class="card bg-primary text-white mb-4">
                <div class="card-body">Categorias</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('category.index') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    @endif
    <div class="col-xl-3 col-md-6 category-card" data-title="Comentarios">
        <div id="card2" class="card bg-warning text-white mb-4">
            <div class="card-body">Comentarios</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('comment.index') }}">Ver detalles</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 category-card" data-title="Regalos">
        <div id="card3" class="card bg-success text-white mb-4">
            <div class="card-body">Regalos</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('gift.index') }}">Ver detalles</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    @if(auth()->user()->level_id == 1)
        <div class="col-xl-3 col-md-6 category-card" data-title="Ratings">
            <div id="card4" class="card bg-danger text-white mb-4">
                <div class="card-body">Ratings</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('rating.index') }}">Ver detalles</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 category-card" data-title="Tiendas">
            <div id="card5" class="card bg-secondary text-white mb-4">
                <div class="card-body">Tiendas</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('shop.index') }}">Ver detalles</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    @endif
    <div class="col-xl-3 col-md-6 category-card" data-title="Usuarios">
        <div id="card6" class="card bg-danger text-white mb-4">
            <div class="card-body">Usuarios</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('user.index') }}">Ver detalles</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>

@endsection

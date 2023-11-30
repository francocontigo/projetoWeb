@extends('layouts.app')

@section('index')
    <section class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4">Escolha uma das duas opções</h1>
            </div>

            <div class="col-lg-8 mt-3">
                <a href="{{ route('usuarios.index') }}" class="btn btn-primary btn-lg btn-block">
                    <h3>Usuários</h3>
                </a>
            </div>

            <div class="col-lg-8 mt-3">
                <a href="{{ route('produtos.index') }}" class="btn btn-primary btn-lg btn-block">
                    <h3>Produtos</h3>
                </a>
            </div>
        </div>
    </section>
@endsection

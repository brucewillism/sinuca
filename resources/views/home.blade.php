@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

               Bem Vindo  {{ Auth::user()->name }} O que deseja fazer<br>            
               <br>
               <a href="{{ route('cadastrar') }}">Cadastrar Jogadores</a><br>
               <a href="{{ route('partida') }}">Novo Jogo</a><br>
               <a href="{{ route('lista') }}"> Listar Partidas</a><br> 
               <a href="{{ route('pontos') }}" </a>Total de Pontos/Jogador
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

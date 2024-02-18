@extends('master')
@section('content')
    <div class="container" style="margin-top: 25px">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Post Create</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Criação de post com validação</h6>
                        <p class="card-text">Formulario para criação de um post com validação via livewire</p>
                        <a href="{{route('post_create')}}" class="card-link">Acesse</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <p> teste</p>
            </div>
            <div class="col">
                <p> teste</p>
            </div>
        </div>
    </div>
@endsection

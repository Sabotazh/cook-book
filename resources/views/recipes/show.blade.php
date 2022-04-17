@extends('recipes.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Переглянути рецепт</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary mb-3" href="{{ route('home.index') }}"> Назад</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mb-3">
                <strong>Назва:</strong>
                {{ $recipe->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mb-3">
                <strong>Інгредієнти та спосіб приготування:</strong>
                {{ $recipe->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Вигляд:</strong>
                <img src="/images/{{ $recipe->image }}" width="500px">
            </div>
        </div>
    </div>
@endsection
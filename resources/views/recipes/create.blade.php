@extends('recipes.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Створіть новий рецепт</h2>
            </div>
            <div class="pull-right mb-3">
                <a class="btn btn-primary" href="{{ route('home.index') }}">Назад</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Упс...</strong>Щось пішло не так. Перевірте введені дані!<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mb-3">
                    <strong>Назва:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Салат «Олів'є»">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mb-3">
                    <strong>Інгредієнти та спосіб приготування:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Інгредієнти: картопля - 300 г, морква - 150 г, огірок - 300 г, ковбаса варена - 250 г, горошок - 300 г, яйця курячі - 2 шт., цибуля зелена, майонез і сіль - за смаком."></textarea>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Зображення:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-primary">Зберегти</button>
            </div>
        </div>

    </form>
@endsection
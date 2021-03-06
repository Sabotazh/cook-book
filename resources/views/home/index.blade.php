@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <h1>Кулінарна книга для запису рецептів</h1>

            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        {{--                <h2>Кулінарна книга для запису рецептів</h2>--}}
                    </div>
                    <div class="pull-right mb-3">
                        <a class="btn btn-success" href="{{ route('recipes.create') }}">Створити новий рецепт</a>
                    </div>
                </div>
            </div>

            <table class="table table-bordered">
                <tr>
                    <th>№</th>
                    <th>Вигляд</th>
                    <th>Назва</th>
                    <th>Інгредієнти та спосіб приготування</th>
                    <th width="280px">Дії</th>
                </tr>
                @foreach ($recipes as $recipe)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td><img src="/images/{{ $recipe->image }}" width="100px"></td>
                        <td>{{ $recipe->name }}</td>
                        <td>{{ $recipe->detail }}</td>
                        <td>
                            <form action="{{ route('recipes.destroy',$recipe->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('recipes.show',$recipe->id) }}">&#128064;</a>
                                {{--                        &#128065;--}}

                                <a class="btn btn-primary" href="{{ route('recipes.edit',$recipe->id) }}">&#129718;</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">&#128465;</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

            {!! $recipes->links() !!}
        @endauth

        @guest
            <h1>Кулінарна книга для запису рецептів</h1>
            <p class="lead">Тільки зареєстровані користувачі можуть додавати та видаляти рецепти</p>
                <table class="table table-bordered">
                    <tr>
                        <th>№</th>
                        <th>Вигляд</th>
                        <th>Назва</th>
                        <th>Інгредієнти та спосіб приготування</th>
                    </tr>
                    @foreach ($recipes as $recipe)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td><img src="/images/{{ $recipe->image }}" width="100px"></td>
                            <td>{{ $recipe->name }}</td>
                            <td>{{ $recipe->detail }}</td>
                        </tr>
                    @endforeach
                </table>

                {!! $recipes->links() !!}
        @endguest
    </div>
@endsection
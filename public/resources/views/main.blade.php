@extends('layouts.app')

@section('content')

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">HTTP Verb</th>
            <th scope="col">Path</th>
            <th scope="col">Used for</th>
            <th scope="col">Example</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="4">Бизнес-центры</td>
        </tr>
        <tr>
            <td>GET</td>
            <td>buildings/all</td>
            <td>Список всех зданий</td>
            <td><a href="buildings/all">Все бизнес-центры</a></td>
        </tr>
        <tr>
            <td>GET</td>
            <td>buildings/:id</td>
            <td>Информация о бизнес-центре</td>
            <td><a href="buildings/view/1">Бизнес-центр #id=1</a></td>
        </tr>
        <tr>
            <td>GET</td>
            <td>buildings/firm/:id</td>
            <td>Фирмы в определенном бизнес-центре</td>
            <td><a href="buildings/firm/1">Фирмы в бизнес-центре #id=1</a></td>
        </tr>
        <tr>
            <td>GET</td>
            <td>buildings/geo/:geo_lat_:geo_lon</td>
            <td>Бизнес центры вблизи определенной геолокации</td>
            <td><a href="buildings/geo/55.7558_37.6173">Москва</a></td>
        </tr>
        <tr>
            <td colspan="4">Фирмы</td>
        </tr>
        <tr>
            <td>GET</td>
            <td>firms/all</td>
            <td>Список всех фирм</td>
            <td><a href="firms/all">Все фирмы</a></td>
        </tr>
        <tr>
            <td>GET</td>
            <td>firms/:id</td>
            <td>Информация о фирме</td>
            <td><a href="firms/view/1">Фирма #id=1</a></td>
        </tr>
        <tr>
            <td>GET</td>
            <td>firms/geo/:geo_lat_:geo_lon</td>
            <td>Фирмы вблизи определенной геолокации</td>
            <td><a href="firms/geo/55.7558_37.6173">Москва</a></td>
        </tr>
        <tr>
            <td>GET</td>
            <td>firms/search/:keyword</td>
            <td>Поиск фирмы по названию</td>
            <td><a href="firms/search/rus">Фирмы c названием "rus"</a></td>
        </tr>
        <tr>
            <td colspan="4">Категории</td>
        </tr>
        <tr>
            <td>GET</td>
            <td>categories/all</td>
            <td>Список всех категорий</td>
            <td><a href="categories/all">Все категории</a></td>
        </tr>
        <tr>
            <td>GET</td>
            <td>categories/:id</td>
            <td>Информация о категории</td>
            <td><a href="categories/view/1">Категория #id=1</a></td>
        </tr>
        <tr>
            <td>GET</td>
            <td>categories/geo/:geo_lat_:geo_lon</td>
            <td>Фирмы определенной категории</td>
            <td><a href="categories/firms/1">Фирмы категории #id=1</a></td>
        </tr>
        </tbody>
    </table>

@endsection



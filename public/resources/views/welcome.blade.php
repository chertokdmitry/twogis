@extends('layouts.app')

@section('content')
    <div>
<h3>Бизнес-центры по геолокации</h3>
<ul>
<li><a href="building/geo/52.5200_13.4050">Germany</a></li>
<li><a href="building/geo/55.7558_37.6173">Russia</a></li>
<li><a href="building/geo/51.5074_0.1278">Great Britain</a></li>
</ul>

<h3>Информация о бизнес-центрах</h3>
        <ul>
            <li><a href="building/all">Список всех зданий</a></li>
            <li><a href="building/view/1">Здание с id=1</a></li>
            <li><a href="building/firm/1">Все фирмы в здании 1</a></li>
        </ul>

<h3>Фирмы по геолокации</h3>
<ul>
<li><a href="firms/geo/52.5200_13.4050">Germany</a></li>
<li><a href="firms/geo/55.7558_37.6173">Russia</a></li>
<li><a href="firms/geo/51.5074_0.1278">Great Britain</a></li>
</ul>

<h3>Информация о фирмах</h3>
<ul>
<li><a href="firm/all">Список всех фирм</a></li>
<li><a href="firm/view/1">Фирма с id=1 </a></li>
</ul>

<h3>Информация о категориях</h3>
<ul>
<li><a href="category/all">Список всех категорий</a></li>
<li><a href="category/view/1">Категория с id=1 </a></li>
<li><a href="category/firms/1"> Фирмы categories = 1</a></li>
</ul>

<h3>Поиск</h3>
<ul>
<li>Поиск организации по названию

<form action="/firm" method="post">
    @csrf
  <div class="form-group">
    <input type="text" class="form-control" name="search_firm" placeholder="Enter Rus">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br><br>
</li>
<li>Поиск организаций по категории

<form action="/firm_category" method="post">
    @csrf
  <div class="form-group">
    <input type="text" class="form-control" name="search_category" placeholder="Enter финансы">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form></li>

</ul>

    </div>
@endsection



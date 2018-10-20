@extends('layouts.app')

@section('content')
    <div>
<h3>Бизнес-центры по геолокации</h3>
<ul>
<li><a href="buildings/52.5200_13.4050">Germany</a></li>
<li><a href="buildings/55.7558_37.6173">Russia</a></li>
<li><a href="buildings/51.5074_0.1278">Great Britain</a></li>
</ul>

<h3>Фирмы по геолокации</h3>
<ul>
<li><a href="firms/52.5200_13.4050">Germany</a></li>
<li><a href="firms/55.7558_37.6173">Russia</a></li>
<li><a href="firms/51.5074_0.1278">Great Britain</a></li>
</ul>

<h3>Информация о бизнес-центрах</h3>
<ul>
<li><a href="v1/building">Список всех зданий</a></li>
<li><a href="v1/building/1">Здание с id=1</a></li>
<li><a href="v1/building/1?expand=firm">Все фирмы в здании 1</a></li>
</ul>

<h3>Информация о фирмах</h3>
<ul>
<li><a href="v1/firm">Список всех фирм</a></li>
<li><a href="v1/firm/1">Фирма с id=1 </a></li>
</ul>

<h3>Информация о категориях</h3>
<ul>
<li><a href="v1/category">Список всех категорий</a></li>
<li><a href="v1/category/1">Категория с id=1 </a></li>
<li><a href="v1/category/1?expand=firm"> Фирмы categories = 1</a></li>
</ul>

<h3>Поиск</h3>
<ul>
<li>Поиск организации по названию

<form action="search/firm" method="post">
  <div class="form-group">
    <input type="text" class="form-control" name="search_firm" placeholder="Enter Rus">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br><br>
</li>
<li>Поиск организаций по категории

<form action="search/category" method="post">
  <div class="form-group">
    <input type="text" class="form-control" name="search_category" placeholder="Enter финансы">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form></li>

</ul>

    </div>
@endsection



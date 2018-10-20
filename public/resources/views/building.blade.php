@extends('layouts.app')

@section('content')
            <table class="table">
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>
                            {{ $item['address'] }}
                        </td>
                        <td>
                            {{ $item['geo_lat'] }}
                        </td>
                        <td>
                            {{ $item['geo_lon'] }}
                        </td>
                    </tr>
                @endforeach
            </table>
@endsection
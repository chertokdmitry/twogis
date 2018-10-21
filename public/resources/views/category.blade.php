@extends('layouts.app')

@section('content')
    <table class="table">
        @foreach ($items as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>
                    {{ $item['name'] }}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
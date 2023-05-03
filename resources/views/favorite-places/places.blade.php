<?php
    use Illuminate\Support\Facades\DB;

    $places = DB::select('select * from favorite_places');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Улюблені місця</title>
    </head>
    <body>
        <h1>Улюблені місця</h1>
        
        <p>Щоби переглянути інформацію про місце, натисність на його ім'я в таблиці.</p>
        
        <p><a href="{{ route('create-favorite-place') }}">Створити нове улюблене місце</a></p>
        
        <table>
            <tr>
                <th>Ім'я</th>
                <th>Тип</th>
            </tr>
            @foreach ($places as $place)
                <tr>
                    <td>
                        <a href="{{ route('show-place-info', ['id' => $place->id]) }}">
                            {{ $place->name }}
                        </a>
                    </td>
                    <td>{{ $place->type }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>

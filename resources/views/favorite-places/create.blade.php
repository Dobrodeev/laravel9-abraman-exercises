<?php
    use Illuminate\Support\Facades\DB;

    $places = DB::select('select * from favorite_places');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Створити нове улюблене місце</title>
    </head>
    <body>
        <h1>Улюблені місця</h1>
        <form action="{{ route('add-favorite-place') }}" method="post">
        @csrf
            <label for="name">Ім'я місця</label>
            <input type="text" id="name" name="name"/><br/>
            
            <label for="type">Тип місця</label>
            <select id="type" name="type">
                <option value="building">споруда</option>
                <option value="nature">природа</option>
                <option value="other">інше</option>
            </select><br/>
            
            <p><input type="submit" value="Створити"/></p>
        </form>
    </body>
</html>

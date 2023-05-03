<?php
    use App\Models\FavoritePlace;

    $place = FavoritePlace::where('id', $place_id)->first();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Додати зображення до улюбленого місця</title>
    </head>
    <body>
        <h1>Улюблені місця</h1>
        <form action="{{ route('add-place-photo', ['id' => $place->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
            <p>Ім'я місця: {{ $place->name }}</p>
            
            <label for="image">Файл зображення:</label>
            <input type="file" id="image" name="image"><br/>
            
            <p><input type="submit" value="Додати"/></p>
        </form>
    </body>
</html>

<?php
    use Illuminate\Support\Facades\Storage;

    use App\Models\FavoritePlace;
    use App\Models\FavoritePlaceImage;

    $place = FavoritePlace::where('id', $id)->first();
    $images = DB::select('select * from favorite_place_images where favorite_place_images.place_id = '.$id)
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Інформація про улюблене місце</title>
    </head>
    <body>
        <p><a href="{{ route('add-place-photo', ['id' => $place->id]) }}">
            Додати нове фото для цього улюбленого місця
        </a></p>

        <p>Ім'я: {{ $place->name }}</p>
        <p>Ідентифікатор: {{ $place->id }}</p>
        <p>Тип: {{ $place->type }}</p>

        <h1>Зображення</h1>
        @foreach ($images as $image)
            <img src="{{ env('APP_URL').Storage::disk('local')->url($image->image_path) }}"/><br/>
        @endforeach
        
        <p><a href="{{ route('show-places') }}">
            Повернутися до переліку улюблених місць
        </a></p>
    </body>
</html>

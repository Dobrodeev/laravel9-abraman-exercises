<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FavoritePlace;
use App\Models\FavoritePlaceImage;

class FavoritePlaceController extends Controller
{
    public function create()
    {
        return view('favorite-places.create');
    }

    public function add(Request $request)
    {
        FavoritePlace::insert([
            'name' => $request->input('name'),
            'type' => $request->input('type')
        ]);

        return redirect('/places');
    }
    
    public function addPhotoForm($id)
    {
        return view('favorite-places.add-place-photo', ['place_id' => $id]);
    }
    
    public function addPhoto(Request $request, $id)
    {   
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $image_path = $request->file('image')->storePublicly('public/places_images/'.$id);
                //$request->file('image')->move(public_path('places_images'), $fileName);
                
                FavoritePlaceImage::insert([
                    'place_id' => $id,
                    'image_path' => $image_path
                ]);
                
                echo 'Файл завантажено успішно.';
                echo '<br/>';
                echo '<p><a href="' . 
                    route('show-place-info', ['id' => $id]) . 
                    '">Перейти до останнього улюбленого місця</a></p>';
            }
        }
        else {
            echo 'Помилка при завантаженні файлу.';
            echo '<br/>';
            echo '<p><a href="' . 
                route('show-place-info', ['id' => $id]) . 
                '">Перейти до останнього улюбленого місця</a></p>';
        }
    }
}

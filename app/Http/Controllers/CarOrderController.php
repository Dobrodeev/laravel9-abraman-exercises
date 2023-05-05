<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CarOrder;

class CarOrderController extends Controller
{
    public function show()
    {
        return view('car-order.form');
    }
    
    public function response(Request $request)
    {
        if ($request->hasFile('person_photo')) {
            if ($request->file('person_photo')->isValid()) {
                $person_photo_path = $request->file('person_photo')->store('car-order-person-photos/');
                
                CarOrder::insert([
                    'full_name' => $request->input('full_name'),
                    'birth_date' => date( 'Y-m-d', strtotime($request->input('birth_date')) ),
                    'email' => $request->input('email'),
                    'phone' => $request->input('full_name'),
                    
                    'country' => $request->input('country'),
                    'city' => $request->input('city'),
                    'passport_adress' => $request->input('passport_adress'),
                    'real_adress' => $request->input('real_adress'),
                    'is_real_is_passport' => $request->input('is_real_is_passport') !== null,
                    
                    'car_brand' => $request->input('car_brand'),
                    'car_color' => $request->input('car_color'),
                    'sum' => (int)$request->input('sum'),
                    'currency' => $request->input('currency'),
                    'is_life_insurance' => $request->input('is_life_insurance') !== null,
                    'is_car_insurance' => $request->input('is_car_insurance') !== null,
                    'is_preterm_payment' => $request->input('is_preterm_payment') !== null,
                    
                    'client_note' => $request->input('client_note'),
                    'person_photo' => $person_photo_path,
                    'purchase_date' => date( 'Y-m-d', strtotime($request->input('purchase_date')) )
                ]);
                
                return view('car-order.response');
            }
        }
        else {
            echo 'Помилка при завантаженні файлу зображення особи.';
            echo '<br/>';
            echo '<p><a href="' . 
                route('car-order-form') . 
                '">Перейти до сторінки оформлення замовлення автомобіля</a></p>';
        }
    }
}

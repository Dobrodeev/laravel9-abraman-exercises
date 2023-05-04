<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Gift;

class GiftController extends Controller
{
    public function response(Request $request)
    {
        Gift::insert([
            'full_name' => $request->input('full_name'),
            'birth_date' => date( 'Y-m-d', strtotime($request->input('birth_date')) ),
            'person_sex' => $request->input('person_sex'),

            // null !== expression
            'is_will_greet' => $request->input('is_will_greet') == 'так',
            
            'is_go_to_cinema' => $request->input('is_go_to_cinema') !== null,
            'is_go_to_cafe' => $request->input('is_go_to_cafe') !== null,
            'is_go_to_coffeehouse' => $request->input('is_go_to_coffeehouse') !== null,
            'is_go_to_pizzeria' => $request->input('is_go_to_pizzeria') !== null,
            'is_go_to_flat' => $request->input('is_go_to_flat') !== null,
            'is_go_to_cottage' => $request->input('is_go_to_cottage') !== null,
            'is_go_at_picnic' => $request->input('is_go_at_picnic') !== null,
            'is_go_at_hunting' => $request->input('is_go_at_hunting') !== null,
            'is_go_at_fishcatch' => $request->input('is_go_at_fishcatch') !== null,

            'is_to_gift_gold' => $request->input('is_to_gift_gold') !== null,
            'is_to_gift_costume_jewellery' => $request->input('is_to_gift_costume_jewellery') !== null,
            'is_to_gift_handbag' => $request->input('is_to_gift_handbag') !== null,
            'is_to_gift_italian_handbag' => $request->input('is_to_gift_italian_handbag') !== null,
            'is_to_gift_boxing_gloves' => $request->input('is_to_gift_boxing_gloves') !== null,

            'budget' => $request->input('budget')
        ]);

        return view('gift-response');
    }
    public function show()
    {
        return view('gift-form');
    }
}

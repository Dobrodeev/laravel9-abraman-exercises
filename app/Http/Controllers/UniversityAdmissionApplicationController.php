<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UniversityAdmissionApplication;

class UniversityAdmissionApplicationController extends Controller
{
    public function show()
    {
        return view('university-admission-application.form');
    }
    
    public function response(Request $request)
    {
        UniversityAdmissionApplication::insert([
            'full_name' => $request->input('full_name'),
            'birth_date' => date( 'Y-m-d', strtotime($request->input('birth_date')) ),
            'passport_adress' => $request->input('passport_adress'),
            'real_adress' => $request->input('real_adress'),
            
            'is_driver_license_A' => $request->input('is_driver_license_A') !== null,
            'is_driver_license_B' => $request->input('is_driver_license_B') !== null,
            'is_driver_license_C' => $request->input('is_driver_license_C') !== null,
            'is_driver_license_CE' => $request->input('is_driver_license_CE') !== null,
            'is_driver_license_D' => $request->input('is_driver_license_D') !== null,
            
            'is_school_diploma' => $request->input('is_school_diploma') !== null,
            'is_college_diploma' => $request->input('is_college_diploma') !== null,
            'university' => $request->input('university'),
            'studing_form' => $request->input('studing_form'),
            'is_bachelor' => $request->input('is_bachelor') !== null,
            'is_magister' => $request->input('is_magister') !== null
        ]);
        
        return view('university-admission-application.response');
    }
}

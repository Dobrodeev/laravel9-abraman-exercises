<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
// use Illuminate\Http\Request;

class SubjectsController extends Controller
{
     /**
     * Show a list of all of the application's users.
     */
    public function index(): View
    {
        $subjects = DB::table('subjects')->get();

        // dump($subjects);

        // foreach ($subjects as $subject) {
        //     echo $subject->teacher_name. ' '.$subject->subject. '; ';
        // }

        return view('subject.index', ['subjects' => $subjects]);
    }
}

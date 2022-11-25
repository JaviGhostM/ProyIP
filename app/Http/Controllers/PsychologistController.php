<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Psychologist;

class PsychologistController extends Controller
{
    public function index()
    {
        $Psy = Psychologist::orderBy('id', 'desc')->paginate(10);   
        return  view('psychologists.homepsy', compact('Psy'));
    }
    public function show(Psychologist $Psy)
    {
        return view('psychologists.showpsy', compact('Psy'));
    }
}

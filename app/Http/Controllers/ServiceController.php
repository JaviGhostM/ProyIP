<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Program;


class ServiceController extends Controller
{
    public function index()
    {
        $Service = Service::orderBy('id', 'desc')->latest()->take(4)->get();
        $Program = Program::orderBy('id', 'desc')->latest()->take(4)->get();
        return view('service.homeservice', compact('Service', 'Program'));
    }
    public function showservice(Service $Serv)
    {
        return view('service.serviceshow', compact('Serv'));
    }
    public function showprogram(Program $Prog)
    {
        return view('service.programshow', compact('Prog'));
    }
}

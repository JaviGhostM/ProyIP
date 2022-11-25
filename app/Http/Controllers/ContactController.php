<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactosMailable;
use App\Mail\BudgetMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('home.contact');
    }
    public function storecontact(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'asunto'=> 'required',
            'message'=> 'required'
        ]);
        $correo = new ContactosMailable($request->all());
        Mail::to('javiermtzghost@gmail.com')->send($correo);
        return redirect()->route('contact.index')->with('info','Mensaje enviado');
    }
    public function storebudget(Request $request)
    {
        $budget = new BudgetMailable($request->all());
        Mail::to('javiermtzghost@gmail.com')->send($budget);
        return redirect()->route('budget.index')->with('info','Mensaje enviado');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Service;
use App\Models\Program;
use Illuminate\Support\Str;

class ServiceAdminController extends Controller
{
    public function storeservice(Request $request)
    {
        $Service = new Service();
        $request->validate(['boximage' => 'required|image']);
        $imagen1 = $request->file('boximage')->store('public/images');
        $url1 = Storage::url($imagen1);
        $Service->boxtittle = $request->boxtittle;
        $Service->boxdesc = $request->boxdesc;
        $request->validate(['bannerimage' => 'required|image']);
        $imagen2 = $request->file('bannerimage')->store('public/images');
        $url2 = Storage::url($imagen2);
        $Service->tittle = $request->tittle;
        $Service->desc = $request->desc; 
        $Service->urltittle = Str::slug($request->tittle);
        $Service->boximage = $url1;
        $Service->bannerimage = $url2;
        $Service->save();
        return redirect()->route('admin.index');      
    }
    public function storeprogram(Request $request)
    {
        $Program = new Program();
        $request->validate(['boximage' => 'required|image']);
        $imagen1 = $request->file('boximage')->store('public/images');
        $url1 = Storage::url($imagen1);
        $Program->boxtittle = $request->boxtittle;
        $Program->boxdesc = $request->boxdesc;
        $request->validate(['bannerimage' => 'required|image']);
        $imagen2 = $request->file('bannerimage')->store('public/images');
        $url2 = Storage::url($imagen2);
        $Program->tittle = $request->tittle;
        $Program->desc = $request->desc; 
        $Program->urltittle = Str::slug($request->tittle);
        $Program->boximage = $url1;
        $Program->bannerimage = $url2;
        $Program->save();
        return redirect()->route('admin.index');      
    }
}

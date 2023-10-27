<?php

namespace App\Http\Controllers;

use App\Ad;
use Illuminate\Http\Request;
use App\Http\Requests\AdStore;

class AdController extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function store(AdStore $request)
    {
        $validated = $request->validated();
        
        $ad = new Ad();
        $ad->title = $validated['title'];
        $ad->description = $validated['description'];
        $ad->price = $validated['price'];
        $ad->localisation = $validated['localisation'];
        $ad->save();
        
        
        return redirect()->route('welcome')->with('success', 'Votre annonce a été postée.!');
    }
    
    public function welcome()
    {
        $ad = Ad::all();
        return view('welcome', compact('ad'));
    }
     
    
}

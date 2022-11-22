<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        Subscription::create([
            'email' => $request->email
        ]);

        return to_route('contact')->with('success', 'success yey!');
    }
}
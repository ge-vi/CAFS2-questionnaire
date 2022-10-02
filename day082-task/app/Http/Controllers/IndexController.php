<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function createGuest(Request $request)
    {
        $guest = Guest::create(['name' => $request->get('guest_name')]);

        $request->session()->put('guest_id', $guest->id);

        return redirect('/quiz/1');
    }
}

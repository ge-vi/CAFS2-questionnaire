<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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
        $request->session()->put('guest_name', $guest->name);

        return redirect('/quiz');
    }
}

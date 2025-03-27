<?php

namespace App\Http\Controllers;

use App\Models\Livre;

class DashboardController extends Controller
{
public function index()
{
    $count = Livre::count();

    $num = 5;
    $lastsBooks = Livre::latest()->limit($num)->get();
    
    return view('dashboard', compact('count', 'lastsBooks'));
}

}
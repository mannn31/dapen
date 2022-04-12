<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Main;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.dashboard',[
            'page' => 'Dashboard'
        ]);
    }
}

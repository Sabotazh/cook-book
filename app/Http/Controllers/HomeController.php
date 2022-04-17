<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $recipes = Recipe::latest()->paginate(5);

        return view('home.index',compact('recipes'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
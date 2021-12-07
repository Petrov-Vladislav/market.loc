<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Smartphone;

class HomeController extends Controller
{
    public function index() {
        $smartphones_count = Smartphone::all()->count();
        $categories_count = Category::all()->count();

        return view('admin.home.index', [
            'smartphones_count' => $smartphones_count,
            'categories_count' => $categories_count,
        ]);
    }
}

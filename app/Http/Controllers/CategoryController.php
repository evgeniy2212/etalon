<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index() {

        $user = Auth::user();

        $categories = Category::all();

        return view('admin', [
            'user' => $user,
            'category' => $categories,
        ]);
    }
}

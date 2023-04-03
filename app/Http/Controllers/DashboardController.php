<?php

namespace App\Http\Controllers;
use App\Models\Books;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $booksCount = Books::count();
        $cetegorycount = Category::count();
        $usercount = User::count();
        return view('Admin.Dashboard', ['books_count' => $booksCount, 'category_count' => $cetegorycount, 'user_count' => $usercount] );
    }
}

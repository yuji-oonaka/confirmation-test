<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(7);
        return view('admin.index', compact('categories', 'contacts'));
    }
}
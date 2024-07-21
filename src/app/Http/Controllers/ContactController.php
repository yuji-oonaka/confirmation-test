<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(Request $request) 
    {
        $categories = Category::all();
        $old_input = $request->session()->get('contact_input', []);
        $request->session()->forget('contact_input'); // セッションからデータを削除
        return view('contacts.index', compact('categories', 'old_input'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->validated();
        $contact['detail'] = ltrim($contact['detail']);
        $contact['gender_text'] = (new Contact(['gender' => $contact['gender']]))->gender_text;
        return view('contacts.confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->validated();
        Contact::create($contact);
        return redirect()->route('contact.thanks');
    }

    public function edit(Request $request)
    {
        $contact = $request->all();
        $request->session()->put('contact_input', $contact);
        return redirect()->route('contact.index');
    }

    public function thanks()
    {
        return view('contacts.thanks');
    }
}
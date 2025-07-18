<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
public function index()
{
    $contact = \App\Models\Contact::first(); // ✅ Ambil 1 data pertama
    return view('admin.contacts.index', compact('contact'));
}

public function update(Request $request, \App\Models\Contact $contact)
{
    $request->validate([
        'email' => 'required|email',
        'phone' => 'required|string|max:20',
        'address' => 'required|string',
    ]);

    $contact->update($request->only(['email', 'phone', 'address']));

    return redirect()->route('admin.contacts.index')->with('success', 'Informasi kontak berhasil diperbarui.');
}
public function showPublic()
{
    $contact = \App\Models\Contact::first(); // Ambil 1 data pertama
    return view('kontak', compact('contact'));
}

}

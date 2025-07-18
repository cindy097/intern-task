<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function __construct()
    {
        // Khusus method index & destroy wajib login
        $this->middleware('auth')->only(['index', 'destroy']);
    }

    // Menampilkan pesan untuk admin
    public function index()
    {
        $messages = Message::latest()->paginate(15);
        return view('admin.messages.index', compact('messages'));
    }

    // Menyimpan pesan dari form kontak
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string',
            'message' => 'required|string',
            'name'    => 'required|string',
            'email'   => 'required|email',
        ]);

        Message::create($request->all());

        return redirect()->route('kontak')->with('success', 'Terima kasih telah mengontak kami!');
    }

    // Menghapus pesan
    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.messages.index')
                         ->with('success', 'Pesan berhasil dihapus.');
    }
}

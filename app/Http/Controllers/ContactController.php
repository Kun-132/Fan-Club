<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    // Remove constructor or keep only web middleware
    public function __construct()
    {
        $this->middleware('web');
    }

    // app/Http/Controllers/ContactController.php

public function send(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|min:10',
    ]);

    try {
        Mail::to('phyo.cwb@gmail.com')->send(new ContactFormMail(
            $validated['name'],
            $validated['email'],
            $validated['message']
        ));

        return response()->json(['success' => true]);
        
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => $e->getMessage()
        ], 500);
    }
}
}
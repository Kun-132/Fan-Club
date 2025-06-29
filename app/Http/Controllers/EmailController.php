<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class EmailController extends Controller
{
    public function send(Request $request)
{
    try {
        $validated = $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::raw("From: {$validated['email']}\n\nMessage:\n{$validated['message']}", function ($message) use ($validated) {
            $message->to('phyo.cwb@gmail.com') // CHANGE TO YOUR REAL EMAIL
                    ->subject("New Message")
                    ->replyTo($validated['email']);
        });

        return response()->json(['success' => 'Email sent successfully!']);

    } catch (ValidationException $e) {
        return response()->json(['error' => $e->errors()], 422); // Validation errors
    } catch (\Throwable $e) {
        Log::error($e);
        return response()->json(['error' => 'Failed to send email. Please try again later.'], 500);
    }
}
}

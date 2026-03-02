<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class EnquiryController extends Controller
{
    public function index()
    {
        return view('pages.enquiry');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'first_name'   => ['required', 'string', 'max:100'],
            'last_name'    => ['required', 'string', 'max:100'],
            'email'        => ['required', 'email', 'max:255'],
            'phone'        => ['required', 'string', 'max:20'],
            'garment_type' => ['required', 'string', 'in:agbada,senator,kaftan,suit,native,custom'],
            'occasion'     => ['nullable', 'string', 'max:255'],
            'budget'       => ['nullable', 'string'],
            'message'      => ['required', 'string', 'min:20', 'max:2000'],
            'product'      => ['nullable', 'string'],
        ]);

        // Log the enquiry (in production: save to DB or send email)
        Log::info('New Enquiry Received', $validated);

        // Optional: Send confirmation email
        // Mail::to('hello@thetencloths.com')->send(new \App\Mail\EnquiryMail($validated));

        return redirect()->route('enquiry')
            ->with('success', 'Thank you for your enquiry, ' . $validated['first_name'] . '! Our team will be in touch within 24–48 hours.');
    }
}

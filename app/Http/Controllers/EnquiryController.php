<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function create()
    {
        return view('enquiry');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'email'    => ['required', 'email', 'max:255'],
            'phone'    => ['required', 'string', 'max:30'],
            'location' => ['required', 'string', 'max:255'],
            'garment'  => ['required', 'string', 'max:100'],
            'details'  => ['nullable', 'string', 'max:2000'],
        ]);

        // For now, just return success (you can save to DB or send mail later)
        return back()->with('success', 'Enquiry submitted successfully!');
    }

    public function index()
{
    // If your form page is what you want to show at /enquiries
    return view('pages.enquiry');
}






}

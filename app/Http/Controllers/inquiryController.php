<?php

namespace App\Http\Controllers;

use App\Http\Requests\InquiryRequest;
use App\Http\Requests\LoginRequest;
use App\Mail\SendInquiry;
use App\Models\Inquiry;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    /**
     * Show contact form
     * @return view
     */
    public function index()
    {
        return view('contact.contact');
    }

    /**
     * Store a temporary resource.
     *
     * @param  InquiryRequest  $request
     * @return Response
     */
    public function store(InquiryRequest $request)
    {
        $data = $request->validated();

        // Store the input data in the session
        $request->session()->put('inquiry', $data);

        return redirect()->route('confirm');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request $request
     * @return Response
     */
    public function show(Request $request)
    {
        $data = $request->session()->get('inquiry');

        return view('contact.contact_confirm.confirm', compact('data'));
    }

    /**
     * Store the specified resource in the storage.
     *
     * 
     * @return Response
     */
    public function sendEmail()
    {
        // Retrieve the input data from the session
        $data = session()->get('inquiry');
        $recipientEmail = $data['email'];
        $adminEmail = config('mail.from.address');
        
        Mail::to($recipientEmail)->send((new SendInquiry($data, 'inquiry_mail_user')));
        Mail::to($adminEmail)->send((new SendInquiry($data, 'inquiry_mail_admin')));
        
        return view('contact.contact_complete.complete');
    }
}



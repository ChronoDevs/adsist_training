<?php

namespace App\Http\Controllers;

use App\Http\Requests\InquiryRequest;
use App\Http\Requests\LoginRequest;
use App\Models\inquiry;
use Illuminate\Http\Request;

class inquiryController extends Controller
{
    /**
     * Show the form
     * @return Response
     */
    public function index()
    {
        return view('adsist.contact.contact');
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

        return view('adsist.contact.contact_confirm.confirm', compact('data'));
    }

    /**
     * Store the specified resource in the storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function save(Request $request)
    {
    // Retrieve the input data from the session
    $data = $request->session()->get('inquiry');

    // Create an Inquiry model and save it to the database
    Inquiry::create($data);

    // Clear the session data
    $request->session()->forget('inquiry');

    return view('adsist.contact.contact_complete.complete');
    }
}



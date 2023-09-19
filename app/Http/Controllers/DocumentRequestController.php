<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DocumentRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestDocument;


class DocumentRequestController extends Controller
{
    /**
     * Show confirm form page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showForm()
    {
        return view('document.request_form');
    }

    /**
     * Confirm form data
     *
     * @param App\Http\Requests\DocumentRequest
     * @return \Illuminate\Contracts\View\View
     */
    public function confirmData(DocumentRequest $request)
    {
        $request->flash();
        return view('document.request_confirm')->withInput($request->all());
    }

    /**
     * Send document request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendRequest()
    {
        $data = request()->session()->getOldInput();
        $user = $data['email'];
        $admin = env('MAIL_FROM_ADDRESS');

        Mail::to($user)->send(new RequestDocument($data, 'user_document_request'));
        Mail::to($admin)->send(new RequestDocument($data, 'admin_document_request'));

        return redirect()->route('login')->with(['status' => 'Your request has been sent.']);
    }
}

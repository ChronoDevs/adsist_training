<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Profile information page
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function showProfile()
    {
        return view('profile.user_information', ['user' => Auth::user()]);
    }
    
    /**
     *Profile edit page
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(User $user)
    {
        if (Auth::id() !== $user->id) {
            return abort(403); // or redirect to an error page
        }
        return view('profile.change_profile', compact('user'));
    }
    
    /**
     * Profile confirm page
     * 
     * @param App\Http\Requests\UserRequest
     * @return \Illuminate\Contracts\View\View
     */
    public function confirmProfile(UserRequest $request)
    {   
        $request->flash();
        $userData = [
            'id' => request('id'),
            'name' => request('name'),
            'email' => request('email'),
            'company_name' => request('company_name'),
            'brand_name' => request('brand_name'),
            'industry' => request('industry'),
            'site_url' => request('site_url'),
        ];

        return view('profile.confirm_profile', compact('userData'));
    }

    /**
     * Store update
     * 
     * @return \Illuminate\Contracts\View\View
     * 
     */
    public function complete()
    {
        $requestData = request()->session()->getOldInput(); 
        $user = new User();

        $user->updateProfile($requestData);
        if (!$user) {
            return redirect()->back()->with('error', 'Failed to update profile');
        }
        
        return redirect()->route('profile.updated')->with('success', 'Profile updated successfully');
    }

    /**
     * Profile complete page
     *
     * @return \Illuminate\Contracts\View\View
     * 
     */
    public function updated(){
        return view('profile.complete_profile');
    }
}

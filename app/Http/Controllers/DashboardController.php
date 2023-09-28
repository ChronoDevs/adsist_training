<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Adset;
use App\Models\Ad;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Dashboard page
     * 
     * @param Illuminate\Http\Request
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {        
        // Get the logged-in user
        $user = Auth::user();

        //get the request input soc_id
        $soc_id = $request->input('soc_id');
        
        //Check variable and Retrieve all campaigns, social_platform associated with the user
        if (!$soc_id) {
            $campaigns = $user->campaigns->where('social_platform_id', '=', 1);
        }
        else {
            $campaigns = $user->campaigns->where('social_platform_id', '=', $soc_id);
        }
        
        // Initialize variables to store sums
        $totalViews = 0;
        $totalClicks = 0;
        $totalAcquisition = 0;
        
        // Loop through campaigns and calculate sums
        foreach ($campaigns as $campaign) {
            $adsets = Adset::where('campaign_id', $campaign->id)->get();
            foreach ($adsets as $adset) {
                $ads = Ad::where('adset_id', $adset->id)->get();
                foreach ($ads as $ad) {
                    $totalViews += $ad->total_views;
                    $totalClicks += $ad->total_clicks;
                    $totalAcquisition += $ad->total_acquisition;
                }
            }
        }
        // Pass the variables to the view
        return view('dashboard.dashboard', compact('campaigns', 'totalViews', 'totalClicks', 'totalAcquisition'));
    }
}

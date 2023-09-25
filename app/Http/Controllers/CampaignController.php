<?php

namespace App\Http\Controllers;

use App\Http\Requests\CampaignRequest;
use App\Models\Campaign;
use App\Models\SocialPlatform;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\NullsafeMethodCall;

class CampaignController extends Controller
{
    /**
     * Budget main page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showMain()
    {
        return view('budget.main');
    }

    /**
     * Show add campaign form
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showBudgetForm()
    {
        $socialPlatforms = SocialPlatform::all();
        return view('budget.main', ['socialPlatforms' => $socialPlatforms]);
    }

    /**
     * Create campaign and add budget
     *
     *
     * @param App\Http\Requests\Auth\CampaignRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addBudget(CampaignRequest $request)
    {
        $userId = Auth::user()->id;
        $campaign = Campaign::register(
            [
                'user_id' => $userId,
                'social_platform_id' => $request->social_platform_id,
                'name' => $request->name,
                'budget' => $request->budget,
                'daily_budget' => $request->daily_budget
            ],
            null,
            null,
            function ($rtn) {
                return redirect()->route('campaign.budget_form')->with(['success' => __('messages.success.campaign_registered')]);
            },
            function ($rtn) {
                return redirect()->route('campaign.budget_form')->withErrors(['name' => __('messages.register.try_again')]);
            },
        );

        return $campaign;
    }
}

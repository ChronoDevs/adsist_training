<?php

namespace App\Http\Controllers;

use App\Http\Requests\CampaignRequest;
use App\Models\Campaign;
use App\Models\SocialPlatform;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CampaignController extends Controller
{
    /**
     * Campaign paginate
     *
     * @return \App\Models\Campaign
     */
    public function campaignPaginate()
    {
        $noItems = 2;
        $userId = Auth::user()->id;
        $campaigns = Campaign::whereHas('user', function(Builder $query) use ($userId) {
                        $query->where('id', $userId);
                    })->with(['renderedAdsets' => function ($query) {
                        $query->select(
                            'id',
                            'campaign_id',
                            DB::raw('(CASE WHEN end_date <= CURRENT_DATE() THEN DATEDIFF(end_date, start_date)
                            ELSE DATEDIFF(CURRENT_DATE(), start_date) END) as days'));
                    }])->paginate($noItems);

        return $campaigns;
    }

    /**
     * Budget main page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showMain()
    {
        return view('budget.main', ['campaigns' => $this->campaignPaginate()]);
    }

    /**
     * Show add campaign form
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showBudgetForm()
    {
        $socialPlatforms = SocialPlatform::all();
        return view(
            'budget.main',
            [
                'campaigns' => $this->campaignPaginate(),
                'socialPlatforms' => $socialPlatforms
            ]
        );
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

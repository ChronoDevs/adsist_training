<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Campaign;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Ad;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class Adset extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'campaign_id',
        'headline',
        'description',
        'site_url',
        'targeting',
        'category_name',
        'media_file',
        'start_date',
        'end_date'
    ];

    /**
     * Get campaign of adset.
     */
    public function campaign(): BelongsTo
    {
        return $this->belongsTo(Campaign::class);
    }

    /**
     * Get ad of adset.
     */
    public function ad(): HasOne
    {
        return $this->hasOne(Ad::class);
    }

    /**
     * Get rendered adset with custom column 'days'.
     */
    public function scopeRendered(Builder $query): void
    {
        $today = Carbon::today();
        $query->where('start_date', '<=', $today)
            ->select('*', DB::raw('(CASE WHEN end_date <= CURRENT_DATE() THEN DATEDIFF(end_date, start_date)
            ELSE DATEDIFF(CURRENT_DATE(), start_date) END) as days'));
    }
}

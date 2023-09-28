<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\SocialPlatform;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Adset;
use App\Models\Traits\Register;

class Campaign extends Model
{
    use HasFactory, Register;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'social_platform_id',
        'name',
        'budget',
        'daily_budget'
    ];

    /**
     * Get user of campaign.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get social platform of campaign.
     */
    public function social_platform(): BelongsTo
    {
        return $this->belongsTo(SocialPlatform::class);
    }

    /**
     * Get adsets of campaign.
     */
    public function adsets(): HasMany
    {
        return $this->hasMany(Adset::class);
    }

    /**
     * Get rendered adsets of campaign.
     */
    public function renderedAdsets(): HasMany
    {
        return $this->hasMany(Adset::class)->rendered();
    }
}

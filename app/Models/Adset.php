<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Campaign;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Ad;

class Adsets extends Model
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
}

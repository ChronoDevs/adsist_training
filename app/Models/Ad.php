<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Adset;

class Ad extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'adsets_id',
        'total_views',
        'total_clicks',
        'total_acquisition',
    ];

    /**
     * Get adset of ad.
     */
    public function adset(): BelongsTo
    {
        return $this->belongsTo(Adset::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'gamer_id',
        'survey_link_id',
        'is_play'
    ];

    protected $table = "survey";

    public function surveyLink()
    {
        return $this->belongsTo(SurveyLink::class);
    }

    public function gamer()
    {
        return $this->belongsTo(Gamer::class);
    }
}

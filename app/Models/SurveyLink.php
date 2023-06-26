<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'expire_time',
        'token',
        'link',
        'created_at'
    ];

    protected $table = "survey_link";
}

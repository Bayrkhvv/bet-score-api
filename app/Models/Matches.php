<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;

    const TABLE = 'matches';

    const ID        = 'id';
    const LEAGUE_ID = 'league_id';
    const TEAM1     = 'team1';
    const TEAM2     = 'team2';
    const SCORE     = 'score';
    const JSON      = 'json';

    protected $fillable = [
        self::LEAGUE_ID,
        self::TEAM1,
        self::TEAM2,
        self::SCORE,
        self::JSON,
    ];

    protected $casts = [
        self::SCORE => 'array',
        self::JSON  => 'array',
    ];
}

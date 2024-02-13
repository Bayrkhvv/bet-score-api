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
    const JSON      = 'json';

    protected $fillable = [
        self::LEAGUE_ID,
        self::JSON,
    ];
}

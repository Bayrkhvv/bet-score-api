<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    const TABLE = 'leagues';

    const ID   = 'id';
    const NAME = 'name';

    protected $fillable = [
        self::NAME,
    ];
}

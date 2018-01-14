<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class MatchTeam extends Pivot
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'match_team';
}

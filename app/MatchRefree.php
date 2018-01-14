<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class MatchRefree extends Pivot
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'match_refree';

}

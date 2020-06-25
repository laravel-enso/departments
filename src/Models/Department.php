<?php

namespace LaravelEnso\Departments\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Tables\Traits\TableCache;

class Department extends Model
{
    use TableCache;

    protected $guarded = ['id'];
}

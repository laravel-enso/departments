<?php

namespace LaravelEnso\Departments\app\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Tables\app\Traits\TableCache;

class Department extends Model
{
    use TableCache;

    protected $fillable = ['name', 'description'];
}

<?php

namespace LaravelEnso\Departments\App\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Tables\App\Traits\TableCache;

class Department extends Model
{
    use TableCache;

    protected $fillable = ['name', 'description'];
}

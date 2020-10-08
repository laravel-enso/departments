<?php

namespace LaravelEnso\Departments\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Tables\Traits\TableCache;

class Department extends Model
{
    use HasFactory, TableCache;

    protected $guarded = ['id'];
}

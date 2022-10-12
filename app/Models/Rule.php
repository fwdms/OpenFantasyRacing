<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/* @mixin Builder */
class Rule extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [];
}

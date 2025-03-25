<?php

namespace Modules\PkgProduct\App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = ['label','expression'];
}

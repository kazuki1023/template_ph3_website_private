<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class Question extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;
    public function choices() : HasMany
    {
        return $this->hasMany(Choice::class);
    }
}

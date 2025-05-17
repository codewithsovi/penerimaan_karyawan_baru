<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kriteria extends Model
{
    use HasFactory;
    protected $quarded =[
        'id',
    ];

    public function subkriterias():HasMany{
        return $this->hasMany(SubKriteria::class);
    }
}

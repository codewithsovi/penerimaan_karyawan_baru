<?php

namespace App\Models;

use App\Models\Alternatif;
use App\Models\SubKriteria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kriteria extends Model
{
    use HasFactory;
    protected $quarded =[
        'id',
    ];

    public function subkriterias():HasMany{
        return $this->hasMany(SubKriteria::class);
    }

     public function alternatifs():HasMany{
        return $this->hasMany(Alternatif::class);
    }
}

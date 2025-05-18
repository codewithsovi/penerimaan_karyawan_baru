<?php

namespace App\Models;

use App\Models\Kriteria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubKriteria extends Model
{
    use HasFactory;
    protected $quarded =[
        'id',
    ];

    public function kriterias(): BelongsTo{
        return $this->belongsTo(Kriteria::class);
    }
}

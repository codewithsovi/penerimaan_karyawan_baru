<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kriteria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alternatif extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'kriteria_id',
    'nilai',
];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function kriteria() : BelongsTo
    {
        return $this->belongsTo(Kriteria::class);
    }
}

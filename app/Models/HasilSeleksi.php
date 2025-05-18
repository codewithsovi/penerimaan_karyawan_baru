<?php

namespace App\Models;

use App\Models\User;
use App\Models\Score;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HasilSeleksi extends Model
{
    use HasFactory;
    protected $quarded = [
        'id',
    ];

    public function score() : BelongsTo
    {
        return $this->belongsTo(Score::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

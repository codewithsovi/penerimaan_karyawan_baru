<?php

namespace App\Models;

use App\Models\User;
use App\Models\HasilSeleksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Score extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'nilai_akhir'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function hasilseleksis(): HasOne
    {
        return $this->hasOne(HasilSeleksi::class);
    }
}

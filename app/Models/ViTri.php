<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ViTri extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function khachSan(): HasMany
    {
        return $this->hasMany(KhachSan::class);
    }

    public function khachHang(): HasMany
    {
        return $this->hasMany(KhachHang::class);
    }
}

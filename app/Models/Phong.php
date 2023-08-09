<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Phong extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function khachSan():BelongsTo {
        return $this->belongsTo(KhachSan::class);
    }

    public function loaiPhong():BelongsTo {
        return $this->belongsTo(LoaiPhong::class);
    }
}

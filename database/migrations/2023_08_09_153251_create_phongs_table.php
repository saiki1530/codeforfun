<?php

use App\Models\KhachSan;
use App\Models\LoaiPhong;
use App\Models\MaGiamGia;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phong', function (Blueprint $table) {
            $table->id();
            $table->foreignId(KhachSan::class);
            $table->foreignId(LoaiPhong::class);
            $table->foreignId(MaGiamGia::class);
            $table->integer('floor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phong');
    }
};

<?php

use App\Models\KhachHang;
use App\Models\KhachSan;
use App\Models\LoaiPhong;
use App\Models\Phong;
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
        Schema::create('don_dat_phong', function (Blueprint $table) {
            $table->id();
            $table->foreignId(KhachHang::class);
            $table->foreignId(KhachSan::class);
            $table->foreignId(LoaiPhong::class);
            $table->foreignId(Phong::class);
            $table->dateTime('ngay_dat');
            $table->dateTime('ngay_tra');
            $table->decimal('donGia',2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_dat_phong');
    }
};

<?php

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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Khóa ngoại từ bảng users
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Khóa ngoại từ bảng products (nếu có)
            $table->integer('rating'); // Điểm đánh giá
            $table->text('review'); // Nội dung đánh giá
            $table->timestamps(); // created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};

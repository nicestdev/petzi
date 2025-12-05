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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();

            $table->foreignId('attendance_type_id')->constrained();
            $table->foreignId('user_id')->constrained();

            $table->dateTime('start');
            $table->dateTime('end')->nullable();

            $table->timestamps();
            $table->softDeletes()->index();

            $table->index(['user_id', 'start']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};

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
        Schema::create('absences', function (Blueprint $table) {
            $table->id();

            $table->foreignId('absence_type_id')->constrained();
            $table->foreignId('user_id')->constrained();

            $table->date('day');
            $table->unsignedInteger('duration_minutes');

            $table->timestamps();
            $table->softDeletes()->index();

            $table->index(['user_id', 'day']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absences');
    }
};

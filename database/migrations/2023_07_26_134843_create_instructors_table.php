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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('wilaya_id')->nullable()->constrained();
            $table->string('school_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('social_list')->nullable();
            $table->string('address')->nullable();
            $table->string('description')->nullable();
            $table->string('punch_line')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};

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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('coach_id')->constrained('users');
            $table->foreignId('wilaya_id')->constrained();
            
            $table->string('address')->nullable();
            $table->string('title');

            $table->text('short_description')->nullable();
            $table->text('long_description');
            $table->text('what_learned')->nullable();
            $table->text('requirements')->nullable();
            $table->text('planning')->nullable();

            $table->integer('min_seats')->nullable();
            $table->integer('total_seats');
            $table->integer('nb_booked')->default(0);
            $table->string('images');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->float('price');
            $table->tinyInteger('certificate')->default(1);
            
            $table->bigInteger('visit_count')->default(0); // Adds visit_count column

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};

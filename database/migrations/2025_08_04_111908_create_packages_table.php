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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('destination_id')->nullable();
            $table->integer('duration')->nullable(); // in days
            $table->decimal('price', 12, 2);
            $table->string('image')->nullable();
            $table->text('facilities')->nullable();
            $table->text('itinerary')->nullable();
            $table->integer('quota')->nullable();
            $table->date('departure_date')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};

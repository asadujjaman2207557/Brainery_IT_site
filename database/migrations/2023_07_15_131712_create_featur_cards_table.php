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
        Schema::create('featur_cards', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title')->nullable();
            $table->integer('price')->nullable();

            $table->string('subtitle')->nullable();
            $table->string('description')->nullable();
            $table->string('tab1_title')->nullable();
            $table->longText('tab1_text')->nullable();
            $table->string('tab2_title')->nullable();
            $table->longText('tab2_text')->nullable();
            $table->string('tab3_title')->nullable();
            $table->longText('tab3_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('featur_cards');
    }
};

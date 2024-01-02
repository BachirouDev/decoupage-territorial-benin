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
        Schema::create('quartier', function (Blueprint $table) {
            $table->id('id_quart');
            $table->string('lib_quart', 250);
            $table->unsignedBigInteger('id_arrond');
            $table->timestamps();
            $table->primary('id_quart');
            $table->foreign('id_arrond')->references('id_arrond')->on('arrondissement');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quartier');
    }
};

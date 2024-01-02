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
        Schema::create('arrondissement', function (Blueprint $table) {
            $table->id('id_arrond');
            $table->string('lib_arrond', 250);
            $table->unsignedBigInteger('id_com');
            $table->timestamps();
            $table->primary('id_arrond');
            $table->foreign('id_com')->references('id_com')->on('commune');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arrondissement');
    }
};

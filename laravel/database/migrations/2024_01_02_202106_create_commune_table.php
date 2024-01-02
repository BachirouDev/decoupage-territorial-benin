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
        Schema::create('commune', function (Blueprint $table) {
            $table->id('id_com');
            $table->string('lib_com', 250);
            $table->unsignedBigInteger('id_dep');
            $table->timestamps();
            $table->primary('id_com');
            $table->foreign('id_dep')->references('id_dep')->on('departement');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commune');
    }
};

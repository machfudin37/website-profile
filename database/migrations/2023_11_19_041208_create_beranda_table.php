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
        Schema::create('beranda', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('subject');
            $table->text('tempat');
            $table->text('runningtext');
            $table->string('logo');
            $table->string('alamat');
            $table->string('email');
            $table->string('telpon');
            $table->string('background');
            $table->string('tupoksi');
            $table->integer('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beranda');
    }
};

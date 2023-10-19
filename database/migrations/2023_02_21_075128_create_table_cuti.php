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
        Schema::create('table_cuti', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_user');
            $table->date('awal_cuti');
            $table->date('akhir_cuti');
            $table->string('keterangan', 500);
            $table->string('status_1')->nullable();
            $table->string('status_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_cuti');
    }
};

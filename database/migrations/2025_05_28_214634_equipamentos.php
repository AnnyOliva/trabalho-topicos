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
            Schema::create('equipamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_equip');
            $table->string('nome_equip');
            $table->text('numSerie');
            $table->date('dataInstalacao');
            $table->unsignedBigInteger('created_by');
            $table->foreign('clientes')
                  ->references('id')->on('clientes')
                  ->onDelete('cascade');
            $table->foreign('modelos')
                  ->references('id')->on('modelos')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipamentos');
    }
};

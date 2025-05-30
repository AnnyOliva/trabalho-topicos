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
            $table->string('nome_equip');
            $table->text('numSerie');
            $table->date('dataInstalacao');
            $table->unsignedBigInteger('clientes_id');
            $table->foreign('clientes_id')
                  ->references('id')->on('clientes');
        
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
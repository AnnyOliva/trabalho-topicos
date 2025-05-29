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
        Schema::create('modelos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_modelo');
            $table->text('nome_modelo');
            $table->string('fabricante')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->foreign('equipamentos')
                  ->references('id')->on('equipamentos')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos');
    }
};

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
        Schema::create('produtos',function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->float('preco');
            $table->binary('imagem')->nullable;

            $table->unsignedBigInteger('categoria_id');
 
            $table->foreign('categoria_id')->references('id')->on('categoria');
            }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

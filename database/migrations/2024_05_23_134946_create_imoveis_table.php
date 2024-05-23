<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao')->nullable();
            $table->decimal('preco', 10, 2)->nullable();
            $table->string('endereco')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('cep')->nullable();
            $table->string('tipo')->nullable(); // Ex.: Casa, Apartamento, Comercio, Terreno
            $table->integer('quartos')->nullable();
            $table->integer('banheiros')->nullable();
            $table->integer('area_terreno')->nullable(); // em metros quadrados
            $table->integer('area_construida')->nullable(); // em metros quadrados
            $table->string('status')->nullable(); // Ex.: Disponível, Vendido, Alugado
            $table->string('tipo_negociacao')->nullable(); // Ex.: Venda, Locação
            $table->json('caracteristicas')->nullable(); // Armazena características em formato JSON
            $table->json('imagens')->nullable(); // Armazena URLs das imagens em formato JSON
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('imoveis');
    }
};

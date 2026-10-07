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
        Schema::create('movimentacao', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_chave');
            $table->foreign('id_chave')
                ->references('id')
                ->on('chave');

            $table->unsignedBigInteger('id_funcionario_retirada');
            $table->foreign('id_funcionario_retirada')
                ->references('id')
                ->on('funcionario');

            $table->unsignedBigInteger('id_funcionario_devolucao')->nullable();
            $table->foreign('id_funcionario_devolucao')
                ->references('id')
                ->on('funcionario');

            $table->date('data_retirada');
            $table->time('hora_retirada');

            $table->date('data_devolucao')->nullable();
            $table->time('hora_devolucao')->nullable();

            $table->integer('tempo_utilizacao')->nullable();

            $table->string('tipo_devolucao', 30)->nullable();

            $table->string('situacao', 30);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimentacao');
    }
};

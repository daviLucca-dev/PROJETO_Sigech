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
        Schema::create('ocorrencia', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_movimentacao');
            $table->foreign('id_movimentacao')
                ->references('id')
                ->on('movimentacao');

            $table->string('tipo', 50);
            $table->text('descricao');
            $table->dateTime('data_ocorrencia');
            $table->string('situacao', 30);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocorrencia');
    }
};

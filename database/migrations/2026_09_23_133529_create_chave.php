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
        Schema::create('chave', function (Blueprint $table) {
            $table->id();

            $table->string('codigo', 30)->unique();

            $table->unsignedBigInteger('id_ambiente');
            $table->foreign('id_ambiente')
                ->references('id')
                ->on('ambiente');

            $table->string('situacao', 30);

            $table->unsignedBigInteger('id_funcionario')->nullable();
            $table->foreign('id_funcionario')
                ->references('id')
                ->on('funcionario');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chave');
    }
};

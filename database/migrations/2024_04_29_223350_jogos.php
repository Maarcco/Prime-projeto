<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('jogos', function(Blueprint $table){
        $table->id('id_jogo');
        $table->string('nome');
        $table->text('descrição');
        $table->string('genero');
        $table->string('desenvolvedora');
        $table->date('data_lancamento');
        $table->timestamp();
        });
    }

    
    public function down(): void
    {
        Schema::DropIfExists('jogos');
    }
};

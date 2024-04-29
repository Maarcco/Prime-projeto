<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('generos', function(Blueprint $table){
            $table->id('id_genero');
            $table->string('nome_genero');
        });
    }

    
    public function down(): void
    {
        Schema::DropIfExists('generos');
    }
};

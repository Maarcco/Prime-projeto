<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('plataforma', function(Blueprint $table){
            $table->id('id_plataforma');
            $table->string('nome_plataforma');
            $table->timestamp();
            
        });
    }

    
    public function down(): void
    {
        Schema::DropIfExists('plataforma');
    }
};

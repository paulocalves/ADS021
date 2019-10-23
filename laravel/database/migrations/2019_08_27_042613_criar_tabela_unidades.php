<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaUnidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("unidade");
            $table->string("proprietario");
            $table->integer("cpf");
            $table->string("email");
            $table->string("telefone"); 
            
            $table->bigInteger("condominio_id")->unsigned();
            $table->foreign("condominio_id")->references("id")->on("condominios");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('unidades');
        
       
        
    }
}

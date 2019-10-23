<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaVisitantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nome");
            $table->integer("rg");
            $table->date("dat_entrada"); 
            
            
                   $table->bigInteger("condominio_id")->unsigned();
            $table->foreign("condominio_id")->references("id")->on("condominios");
            
            $table->bigInteger("unidade_id")->unsigned();
            $table->foreign("unidade_id")->references("id")->on("unidades");
            
            
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
        Schema::dropIfExists('visitantes');

        
        
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaMoradores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moradores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("unidade");
            $table->string("nome");
            $table->integer("cpf");
            $table->string("email");
            $table->string("telefone");
            $table->string("placa");
            $table->string("veiculo");
            $table->string("situacao");
            
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
        Schema::dropIfExists('moradores');
    }
}

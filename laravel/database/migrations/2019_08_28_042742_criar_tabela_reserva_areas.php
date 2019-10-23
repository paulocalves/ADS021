<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaReservaAreas extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date("dat_reserva");
            $table->string("situacao");
            
            $table->bigInteger("condominio_id")->unsigned();
            $table->foreign("condominio_id")->references("id")->on("condominios");
            
            $table->bigInteger("unidade_id")->unsigned();
            $table->foreign("unidade_id")->references("id")->on("unidades");
            
            $table->bigInteger("area_id")->unsigned();
            $table->foreign("area_id")->references("id")->on("areas");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('reservas');
    }

}

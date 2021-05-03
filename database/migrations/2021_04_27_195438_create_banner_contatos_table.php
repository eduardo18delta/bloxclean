<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_contatos', function (Blueprint $table) {
            $table->id();
            $table->string('imagem', 100);
            $table->string('titulo', 80);
            $table->string('conteudo', 150);
            $table->string('numero', 20);
            $table->string('url_numero', 100);
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
        Schema::dropIfExists('banner_contatos');
    }
}

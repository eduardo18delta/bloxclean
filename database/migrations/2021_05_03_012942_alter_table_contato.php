<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableConfigGeral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('config_geral', function (Blueprint $table) {
            $table->string('logo')->after('id'); 
            $table->string('endereco');
            $table->string('url_facebook');
            $table->string('url_instagram');
            $table->string('url_youtube');
            $table->string('url_twitter');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

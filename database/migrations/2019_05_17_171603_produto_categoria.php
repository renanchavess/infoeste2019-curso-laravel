<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdutoCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos_categorias', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();            
            $table->bigInteger('produto_id')->unsigned();
            $table->bigInteger('categoria_id')->unsigned();
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('produto_id')->references('id')->on('produtos');
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

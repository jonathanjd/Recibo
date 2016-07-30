<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('invoice_id')->unsigned();
            $table->string('maquina',50);
            $table->string('modelo',50);
            $table->text('descripcion');
            $table->integer('abono');
            $table->integer('costo');
            $table->enum('estado', ['Reparada', 'No reparada']);
            $table->enum('entregado', ['Si', 'No']);

            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');

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
        Schema::drop('details');
    }
}

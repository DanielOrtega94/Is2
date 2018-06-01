<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'respuesta';

    /**
     * Run the migrations.
     * @table respuesta
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('opcion');
            $table->unsignedInteger('pregunta')->nullable();
            $table->string('empresa', 45)->nullable();
            $table->string('seleccionada', 45)->nullable();

            $table->index(["empresa"], 'empresa_idx');

            $table->index(["pregunta"], 'pregunta_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('empresa', 'empresa_idx')
                ->references('Nombre')->on('empresa')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('pregunta', 'pregunta_idx')
                ->references('id')->on('questions')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}

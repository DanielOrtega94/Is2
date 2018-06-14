<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'documento';

    /**
     * Run the migrations.
     * @table documento
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('ano')->nullable();
            $table->string('link', 45)->nullable();
            $table->string('descripcion', 220)->nullable();
            $table->unsignedInteger('id_pregunta');

            $table->index(["id_pregunta"], 'id_pregunta_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('id_pregunta', 'id_pregunta_idx')
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

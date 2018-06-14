<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorrespondeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'corresponde';

    /**
     * Run the migrations.
     * @table corresponde
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_topico');
            $table->unsignedInteger('id_pregunta');
            $table->tinyInteger('pertenece')->nullable();

            $table->index(["id_pregunta"], 'pregunta_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('id_pregunta', 'pregunta_idx')
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaTopicoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'nota_topico';

    /**
     * Run the migrations.
     * @table nota_topico
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('empresa');
            $table->unsignedInteger('topico')->nullable();
            $table->string('nota', 45)->nullable();

            $table->index(["topico"], 'topico_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('topico', 'topico_idx')
                ->references('id')->on('topics')
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

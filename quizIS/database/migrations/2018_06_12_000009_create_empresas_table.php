<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'empresas';

    /**
     * Run the migrations.
     * @table empresas
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->nullable();
            $table->string('Nombre', 45);
            $table->unsignedInteger('user_id');
            $table->string('correo', 45)->nullable();
            $table->string('direccion', 45)->nullable();
            $table->string('telefono', 45)->nullable();
            $table->string('rut_juridica', 22)->nullable();

            $table->index(["user_id"], 'user_id_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('user_id', 'user_id_idx')
                ->references('id')->on('users')
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

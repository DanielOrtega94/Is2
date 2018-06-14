<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'results';

    /**
     * Run the migrations.
     * @table results
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('correct')->nullable()->default(null);
            $table->dateTime('date')->nullable()->default(null);
            $table->unsignedInteger('empresa_id');
            $table->unsignedInteger('question_id');
            $table->unsignedInteger('topico');

            $table->index(["topico"], 'topico_idx');

            $table->index(["question_id"], 'fk_257_question_question_id_result');

            $table->index(["user_id"], 'fk_254_user_user_id_result');

            $table->index(["deleted_at"], 'results_deleted_at_index');

            $table->index(["empresa_id"], 'empresa_id_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('user_id', 'fk_254_user_user_id_result')
                ->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('question_id', 'fk_257_question_question_id_result')
                ->references('id')->on('questions')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('empresa_id', 'empresa_id_idx')
                ->references('id')->on('empresas')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('topico', 'topico_idx')
                ->references('topic_id')->on('questions')
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

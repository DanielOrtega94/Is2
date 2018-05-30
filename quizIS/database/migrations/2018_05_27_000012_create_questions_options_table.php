<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsOptionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'questions_options';

    /**
     * Run the migrations.
     * @table questions_options
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('question_id')->nullable()->default(null);
            $table->string('option')->nullable()->default(null);
            $table->float('ponderation')->nullable();
            $table->tinyInteger('correct')->nullable()->default('0');

            $table->index(["deleted_at"], 'questions_options_deleted_at_index');

            $table->index(["question_id"], 'fk_257_question_question_id_questions_option');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('question_id', 'fk_257_question_question_id_questions_option')
                ->references('id')->on('questions')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'questions';

    /**
     * Run the migrations.
     * @table questions
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('topic_id')->nullable();
            $table->string('etapa_id', 45)->nullable();
            $table->string('tipo', 20)->nullable();
            $table->text('question_text')->nullable()->default(null);
            $table->text('code_snippet')->nullable()->default(null);
            $table->text('answer_explanation')->nullable()->default(null);
            $table->string('more_info_link')->nullable()->default(null);

            $table->index(["topic_id"], 'fk_256_topic_topic_id_question');

            $table->index(["etapa_id"], 'etapa_id_idx');

            $table->index(["deleted_at"], 'questions_deleted_at_index');

            $table->unique(["id"], 'id_UNIQUE');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('topic_id', 'fk_256_topic_topic_id_question')
                ->references('id')->on('topics')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('etapa_id', 'etapa_id_idx')
                ->references('idetapa')->on('topics')
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

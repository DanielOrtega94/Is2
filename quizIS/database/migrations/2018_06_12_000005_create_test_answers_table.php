<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestAnswersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'test_answers';

    /**
     * Run the migrations.
     * @table test_answers
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable()->default(null);
            $table->unsignedInteger('test_id')->nullable()->default(null);
            $table->unsignedInteger('question_id')->nullable()->default(null);
            $table->tinyInteger('correct')->nullable()->default('0');
            $table->unsignedInteger('option_id')->nullable()->default(null);

            $table->index(["deleted_at"], 'test_answers_deleted_at_index');
            $table->softDeletes();
            $table->nullableTimestamps();
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserActionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'user_actions';

    /**
     * Run the migrations.
     * @table user_actions
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
            $table->string('action');
            $table->string('action_model')->nullable()->default(null);
            $table->integer('action_id')->nullable()->default(null);

            $table->index(["user_id"], 'fk_254_user_user_id_user_action');

            $table->index(["deleted_at"], 'user_actions_deleted_at_index');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('user_id', 'fk_254_user_user_id_user_action')
                ->references('id')->on('users')
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

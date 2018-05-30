<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password')->nullable()->default(null);
            $table->unsignedInteger('role_id')->nullable()->default(null);
            $table->string('remember_token')->nullable()->default(null);

            $table->index(["deleted_at"], 'users_deleted_at_index');

            $table->index(["role_id"], 'fk_253_role_role_id_user');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('role_id', 'fk_253_role_role_id_user')
                ->references('id')->on('roles')
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

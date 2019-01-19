<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleGroupsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'module_groups';

    /**
     * Run the migrations.
     * @table module_groups
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('modules_id');
            $table->unsignedInteger('groups_id');

            $table->index(["groups_id"], 'fk_module_groups_groups1_idx');

            $table->index(["modules_id"], 'fk_module_groups_modules1_idx');
            $table->nullableTimestamps();


            $table->foreign('modules_id', 'fk_module_groups_modules1_idx')
                ->references('id')->on('modules')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('groups_id', 'fk_module_groups_groups1_idx')
                ->references('id')->on('groups')
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'contacts';

    /**
     * Run the migrations.
     * @table contacts
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('description', 100);
            $table->unsignedInteger('users_id');
            $table->unsignedInteger('contact_types_id');

            $table->index(["users_id"], 'fk_contacts_users1_idx');

            $table->index(["contact_types_id"], 'fk_contacts_contact_types1_idx');
            $table->nullableTimestamps();


            $table->foreign('users_id', 'fk_contacts_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('contact_types_id', 'fk_contacts_contact_types1_idx')
                ->references('id')->on('contact_types')
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

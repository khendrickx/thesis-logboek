<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrysForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('entries', function($table) {
            $table->foreign('logboek_id')->references('id')->on('logboeken')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('entrytype_id')->references('id')->on('entrytypes')->onDelete('cascade')->onUpdate('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('entries', function($table) {
            $table->dropForeign('type_id');
            $table->dropForeign('logboek_id');
        });


    }

}

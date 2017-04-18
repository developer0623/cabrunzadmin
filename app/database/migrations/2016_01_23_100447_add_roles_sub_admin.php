<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRolesSubAdmin extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sub_admin', function(Blueprint $table)
		{
			$table->integer('roles');
			
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sub_admin', function(Blueprint $table)
		{
			$table->dropColumn('roles');
		});
	}

}

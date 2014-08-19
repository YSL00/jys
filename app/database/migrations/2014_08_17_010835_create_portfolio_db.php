<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioDb extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(!Schema::hasTable('comments')){
			Schema::create('comments', function($table){
				$table -> increments('comment_id');
				$table -> string('comment_user');
				$table -> string('comment_content');
				$table -> tinyInteger('approved');
				$table -> timestamps();
				$table -> softDeletes();
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		if(Schema::hasTable('comments')){
			Schema::drop('comments');
		}
	}

}

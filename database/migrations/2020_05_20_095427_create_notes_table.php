<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notes', function(Blueprint $table) {
		    $table->increments('id');
            $table->text('title');
            $table->text('body');
		    $table->integer('user_id');
		    $table->timestamps();
        });
       /* Schema::table('notes', function(Blueprint $table){
            $table->text('title');
        });*/
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroupPostCollections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_post_collections', function(Blueprint $table) {
            $table->increments('id')->comment('primary key');
            $table->integer('post_id')->index()->unsigned()->comment('for post_id');
            $table->integer('user_id')->index()->unsigned()->comment('who collected');
            $table->timestamps();
            $table->index(['post_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_post_collections');
    }
}
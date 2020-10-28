<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_user', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedInteger('page_id');

            $table->boolean('create')
                ->default(false)
                ->comment('Permission of create');
            $table->boolean('read')
                ->default(true)
                ->comment('Permission of read');
            $table->boolean('update')
                ->default(false)
                ->comment('Permission of update');
            $table->boolean('delete')
                ->default(false)
                ->comment('Permission of delete');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_page');
    }
}

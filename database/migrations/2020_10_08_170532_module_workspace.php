<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModuleWorkspace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workspace_module', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('workspace_id');
            $table->unsignedInteger('module_id');

            $table->foreign('workspace_id')->references('id')->on('workspaces');
            $table->foreign('module_id')->references('id')->on('modules');

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
        Schema::dropIfExists('workspace_module');
    }
}

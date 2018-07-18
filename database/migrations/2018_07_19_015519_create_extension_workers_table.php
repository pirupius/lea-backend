<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtensionWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extension_workers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone', 20);
            $table->string('specialities', 50)->nullable();
            $table->string('district', 50)->nullable();
            $table->string('village', 50)->nullable();
            $table->string('subcounty', 50)->nullable();
            $table->string('country', 50)->nullable();
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
        Schema::dropIfExists('extension_workers');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSailorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sailors', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('lastname');
            $table->string('registration');
            $table->integer('grade')->default(0);
            $table->integer('ID_address');
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
        Schema::dropIfExists('sailors');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nic');
            $table->string('fullname');
            $table->string('namewithin');
            $table->date('dob');
            $table->string('add1');
            $table->string('add2');
            $table->string('add3')->nullable();
            $table->string('post')->nullable();
            $table->integer('cat_id');
            $table->integer('district_id')->nullable();
            $table->integer('province_id')->nullable();
            $table->string('contact');
            $table->string('image')->nullable();
            $table->integer('feet');
            $table->integer('inch');
            $table->integer('chest');
            $table->string('eyecol');
            $table->text('eduq');
            $table->text('extq');
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
        Schema::dropIfExists('person');
    }
}

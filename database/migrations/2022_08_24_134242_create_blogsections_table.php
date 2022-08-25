<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogsections', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('default.pan');
            $table->string('title');
            $table->string('img')->default('default.pan');
            $table->longText('secondtitle');
            $table->longText('thirdtitle');
            $table->longText('description');
            $table->longText('firstdescription');
            $table->longText('seconddescription');
            $table->longText('thirddescription');
            $table->longText('fourthdescription');
            $table->longText('fifthtdescription');
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
        Schema::dropIfExists('blogsections');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confession_posts', function (Blueprint $table) {
            $table->id();

            //Confession Post Attribute
            $table->text('title'); //post title
            $table->text('content'); //post content
            $table->text('user_id'); //post user id
            $table->mediumText('image_path')->nullable();
            $table->bigInteger('views')->unsigned()->default(0);
            //

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
        Schema::dropIfExists('confession_posts');
    }
};

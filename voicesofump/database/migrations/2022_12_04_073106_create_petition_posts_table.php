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
        Schema::create('petition_posts', function (Blueprint $table) {
            $table->id();

            //Petition Post Attribute
            $table->text('title'); //post title
            $table->text('content'); //post content
            $table->text('user_id'); //post user id
            $table->integer('signature_goals')->nullable();
            $table->mediumText('image_path')->nullable();
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
        Schema::dropIfExists('petition_posts');
    }
};

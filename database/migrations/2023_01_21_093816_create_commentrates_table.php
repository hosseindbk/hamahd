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
        Schema::create('commentrates', function (Blueprint $table) {
            $table->id();
            $table->string('commentable_id');
            $table->string('commentable_type');
            $table->string('name');
            $table->string('phone');
            $table->boolean('approved');
            $table->tinyInteger('item1');
            $table->tinyInteger('item2');
            $table->tinyInteger('item3');
            $table->tinyInteger('item4');
            $table->tinyInteger('item5');
            $table->tinyInteger('item6');
            $table->text('comment');
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
        Schema::dropIfExists('commentrates');
    }
};

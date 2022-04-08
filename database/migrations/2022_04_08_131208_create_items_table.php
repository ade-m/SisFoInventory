<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('code')->unique();
            $table->text('description')->nullable();
            $table->string('item_type',20);
            $table->string('item_category',20);
            $table->string('uom')->nullable();
            $table->string('assigned_user')->nullable();

            $table->foreign('item_type')->references('code')->on('item_types');
            $table->foreign('item_category')->references('code')->on('item_categories');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
    }
}

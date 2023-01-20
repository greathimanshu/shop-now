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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->double('cost', 10,2);
            $table->double('discount_cost', 10,2)->nullable();
            $table->string('status')->default('active');
            $table->integer('quantity')->default(0);
            $table->longText('description')->nullable();
            $table->string('discount')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myproducts', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("disc");
            $table->string("total_price");
            // $table->string("discount_price");
            // $table->string("save_price");
            $table->string("photo");
            $table->string("brand");
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
        Schema::dropIfExists('myproducts');
    }
}

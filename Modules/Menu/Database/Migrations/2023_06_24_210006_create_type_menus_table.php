<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('status');
            $table->unsignedBigInteger('company_id');
            $table->timestamps();
        });

        Schema::table('type_menus', function (Blueprint $table) {
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_menus');
    }
}

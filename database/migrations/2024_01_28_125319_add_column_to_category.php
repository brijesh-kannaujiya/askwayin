<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Categories', function (Blueprint $table) {
            $table->string('photo5');
            $table->string('mobile_center_text');
            $table->string('mobile_center_text_ar');
            $table->integer('is_mobile_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Categories', function (Blueprint $table) {
            //
        });
    }
}

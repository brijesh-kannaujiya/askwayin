<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToListings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->string('whatsapp_number')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('youtube')->nullable();
            $table->string('tiktok')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->dropColumn('whatsapp_number');
            $table->dropColumn('snapchat');
            $table->dropColumn('youtube');
            $table->dropColumn('tiktok');
        });
    }
}

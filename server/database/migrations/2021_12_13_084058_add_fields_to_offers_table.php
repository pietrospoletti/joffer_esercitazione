<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->string('language')->nullable();
            $table->string('icon')->nullable();
            $table->string('company')->nullable();
            $table->integer('RAL')->nullable();
            $table->string('level')->nullable();
            $table->string('location')->nullable();
            $table->string('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->dropColumn ([
                'language',
                'icon',
                'company',
                'RAL',
                'level',
                'location',
                'description',
                ]);
                
        });
    }
}

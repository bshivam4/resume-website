<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToBasicProfilesTab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('basic_profiles', function (Blueprint $table) {
            $table->string('quora_url')->nullable();
            $table->string('github_url')->nullable();
            $table->string('insta_url')->nullable();
            $table->string('location');
            $table->string('mobile');
            $table->string('email');
            $table->string('website');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

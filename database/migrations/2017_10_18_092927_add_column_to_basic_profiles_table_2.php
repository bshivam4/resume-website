<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToBasicProfilesTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('basic_profiles', function (Blueprint $table) {
            $table->string('website_views_count')->nullable();
            $table->string('skills_count')->nullable();
            $table->string('projects_count')->nullable();
            $table->string('years_active_count')->nullable();
            $table->mediumText('about_me_1')->nullable();
            $table->mediumText('about_me_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('basic_profiles', function (Blueprint $table) {
            //
        });
    }
}

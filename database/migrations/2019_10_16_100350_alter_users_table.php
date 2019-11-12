<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->string('first_name')->after('name'); 
            $table->string('last_name')->after('first_name');
            $table->string('google_id')->after('last_name')->default(0); 
            $table->string('facebook_id')->after('google_id')->default(0); 
            $table->string('linkedin_id')->after('facebook_id')->default(0); 
            $table->integer('user_type')->after('linkedin_id')->comment("1=>Super Admin, 2=>Admin, 3=>Sub Admin, 4=>User");
            $table->integer('is_deleted')->after('remember_token')->default(0);  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('google_id');
            $table->dropColumn('facebook_id');
            $table->dropColumn('linkedin_id');
            $table->dropColumn('user_type');
            $table->dropColumn('is_deleted');
        });
    }
}

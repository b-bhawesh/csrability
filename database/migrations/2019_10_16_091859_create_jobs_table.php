<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('job_title',255);
            $table->text('job_description');
            $table->dateTime('publish_date');
            $table->dateTime('closing_date');
            $table->string('company_image',255)->nullable();
            $table->integer('organisation_type');
            $table->string('organisation',255);
            $table->integer('country');
            $table->integer('state');
            $table->integer('city');
            $table->string('attachment',255)->nullable();
            $table->integer('temp_job_id');
            $table->integer('posted_by');          
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
        Schema::dropIfExists('jobs');
    }
}

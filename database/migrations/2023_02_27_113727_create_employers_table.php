<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('company_name')->nullable();
            $table->text('type_of_company')->nullable();
            $table->text('location')->nullable();
            $table->text('website')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('job_category')->nullable();
            $table->text('age_limit')->nullable();
            $table->text('educational_requirement')->nullable();
            $table->text('working_experience_requirement')->nullable();
            $table->text('other_additional_requirement')->nullable();
            $table->text('estimate_salary_offer')->nullable();
            $table->text('other_allowance')->nullable();
            $table->text('gender')->nullable();
            $table->text('interview_type')->nullable();
            $table->text('apply_date')->nullable();
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
        Schema::dropIfExists('employers');
    }
}

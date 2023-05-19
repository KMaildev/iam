<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('date_of_birth')->nullable();
            $table->text('age')->nullable();
            $table->text('gender')->nullable();
            $table->text('height')->nullable();
            $table->text('weight')->nullable();
            $table->text('language_level_id')->nullable();
            $table->text('education')->nullable();
            $table->text('foreign_experience')->nullable();
            $table->text('other_qualification')->nullable();
            $table->text('marital_status')->nullable();
            $table->text('blood_type')->nullable();
            $table->text('wearing_glasses_or_not')->nullable();
            $table->text('birth_place')->nullable();
            $table->text('nationality')->nullable();
            $table->text('religion')->nullable();
            $table->text('address')->nullable();
            $table->text('phone_no')->nullable();

            $table->text('photo')->nullable();
            $table->text('nrc_photo_back')->nullable();
            $table->text('nrc_photo_front')->nullable();
            $table->text('household_members')->nullable();
            $table->text('is_active')->nullable();
            $table->text('account_type')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

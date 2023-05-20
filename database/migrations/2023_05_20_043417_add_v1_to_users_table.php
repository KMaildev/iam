<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddV1ToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('companie_id')->nullable();
            
            $table->text('first_status')->nullable();
            $table->text('first_select_date')->nullable();

            $table->text('second_status')->nullable();
            $table->text('second_select_date')->nullable();

            $table->text('third_status')->nullable();
            $table->text('third_select_date')->nullable();
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
            //
        });
    }
}

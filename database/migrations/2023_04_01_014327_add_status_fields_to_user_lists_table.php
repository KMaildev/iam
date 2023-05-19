<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusFieldsToUserListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_lists', function (Blueprint $table) {
            $table->text('second_status')->nullable();
            $table->text('second_date')->nullable();
            $table->text('third_status')->nullable();
            $table->text('third_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_lists', function (Blueprint $table) {
            //
        });
    }
}

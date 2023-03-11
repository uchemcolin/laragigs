<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listings', function (Blueprint $table) {
            //
            //$table->foreignId("user_id")->after("id")->constrained()->onDelete("cascade");

            //nullable included because as at the time of running this migration the table was already created
            //so I had to create this migration to alter the table
            //but on the live site it will be included in the listings table direct
            $table->foreignId("user_id")->after("id")->nullable()->constrained()->onDelete("cascade");
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
            //
            $table->dropColumn("user_id");
        });
    }
}

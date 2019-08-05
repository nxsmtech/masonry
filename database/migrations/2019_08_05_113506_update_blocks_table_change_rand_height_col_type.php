<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBlocksTableChangeRandHeightColType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blocks', function (Blueprint $table) {
            $table->string('rand_height')->change();
        });

        if (app()->runningUnitTests()) {
            //SQLite syntax
            DB::statement("UPDATE blocks SET rand_height = rand_height || 'px'");
        } else {
            DB::statement("UPDATE blocks SET rand_height = CONCAT(rand_height, 'px')");
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Mysql && SQLite syntax
        DB::statement("UPDATE blocks SET rand_height = REPLACE(rand_height, 'px', '')");

        Schema::table('blocks', function (Blueprint $table) {
            $table->integer('rand_height')->change();
        });
    }
}

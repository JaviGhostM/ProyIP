<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAtributesToHomeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homeads', function (Blueprint $table) {
            $table->text('desc')->nullable()->after('image');
            $table->sring('slug')->nullable()->after('desc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('homeads', function (Blueprint $table) {
            $table->dropColumn('desc');
            $table->dropColumn('slug');
        });
    }
}

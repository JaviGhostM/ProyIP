<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContenidoToPsychologystsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('psychologists', function (Blueprint $table) {
            $table->string('area')->nullable()->after('specialty');
            $table->string('typeatt')->nullable()->after('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('psychologists', function (Blueprint $table) {
            $table->dropColumn('area');
            $table->dropColumn('typeatt');
        });
    }
}

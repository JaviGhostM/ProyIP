<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContenidoToHomeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homeads', function (Blueprint $table) {
            $table->string('imagebanner')->nullable()->after('image');
            $table->string('tittle')->nullable()->after('texto');
            $table->string('subtittle')->nullable()->after('tittle');
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
            $table->dropColumn('imagebanner');
            $table->dropColumn('tittle');
            $table->dropColumn('subtittle');
        });
    }
}

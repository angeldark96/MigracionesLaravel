<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDniEdadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * O use CHANGE, pero eso significa que debe dar el nombre de la
         *  columna dos veces (porque CHANGE también le permite cambiar
         *  el nombre de la columna).
         *  DB::statement('ALTER TABLE users CHANGE dni pasaporte INTEGER ');
         */
        DB::statement('ALTER TABLE users CHANGE dni dni INTEGER ');
        DB::statement('ALTER TABLE users CHANGE edad edad INTEGER ');


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // DB::statement('ALTER TABLE users CHANGE pasaporte dni INTEGER ');
        DB::statement('ALTER TABLE users ALTER COLUMN dni dni  VARCHAR(255) ');
        DB::statement('ALTER TABLE users ALTER COLUMN edad edad VARCHAR(255)');
    }
}

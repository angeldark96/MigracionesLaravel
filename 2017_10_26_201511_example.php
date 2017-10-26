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
        Schema::table('profiles', function (Blueprint $table) {
            $table->renameColumn('contact', 'contact_person');
            $table->string('address')->after('phone');
            $table->string('website', 100)->after('address');
            $table->dropColumn('comments');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->renameColumn('contact_person', 'contact');
            $table->dropColumn('address');
            $table->dropColumn('website');
            $table->string('comments')->nullable()->after('phone');
        });
}

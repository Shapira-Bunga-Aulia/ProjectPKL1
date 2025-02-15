<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstname')->nullable()->after('email');
            $table->string('lastname')->nullable()->after('firstname');
            $table->string('telephone')->nullable();
            $table->string('fax')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('postcode')->nullable();
            $table->string('country')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'firstname')) {
                $table->dropColumn('firstname');
            }
            if (Schema::hasColumn('users', 'lastname')) {
                $table->dropColumn('lastname');
            }
            if (Schema::hasColumn('users', 'telephone')) {
                $table->dropColumn('telephone');
            }
            if (Schema::hasColumn('users', 'fax')) {
                $table->dropColumn('fax');
            }
            if (Schema::hasColumn('users', 'address1')) {
                $table->dropColumn('address1');
            }
            if (Schema::hasColumn('users', 'address2')) {
                $table->dropColumn('address2');
            }
            if (Schema::hasColumn('users', 'city')) {
                $table->dropColumn('city');
            }
            if (Schema::hasColumn('users', 'postcode')) {
                $table->dropColumn('postcode');
            }
            if (Schema::hasColumn('users', 'country')) {
                $table->dropColumn('country');
            }
        });
    }
    
    
    /**
     * Reverse the migrations.
     */

};

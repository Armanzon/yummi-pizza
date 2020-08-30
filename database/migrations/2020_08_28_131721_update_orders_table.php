<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('first_name', 50);
            $table->text('address');
            $table->string('last_name', 50);
            $table->string('phone');
            $table->integer('zip');
            $table->string('email', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('address');
            $table->dropColumn('last_name');
            $table->dropColumn('phone');
            $table->dropColumn('zip');
            $table->dropColumn('email');
        });
    }
}

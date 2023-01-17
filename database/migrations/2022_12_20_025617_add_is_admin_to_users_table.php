<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // tidak jadi dimasukkan sebagai tambahan, karena sudah dimasukkan ke create_users
        // Schema::table('users', function (Blueprint $table) {
        //     $table->boolean('is_admin')->default(false);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // tidak jadi dimasukkan sebagai tambahan, karena sudah dimasukkan ke create_users
        // Schema::table('users', function (Blueprint $table) {
        //     $table->dropColomn('is_admin');
        // });
    }
};

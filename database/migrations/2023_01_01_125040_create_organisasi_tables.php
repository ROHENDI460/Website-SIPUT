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
        Schema::create('organisasi_tables', function (Blueprint $table) {
            $table->id();
            $table->string("nama_pj");
            $table->string("username_organisasi");
            $table->string("nama_organisasi");
            $table->string("noTelp_organisasi");
            $table->string("email_organisasi");
            $table->string("password_organisasi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organisasi_tables');
    }
};

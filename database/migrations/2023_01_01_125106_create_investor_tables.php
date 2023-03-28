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
        Schema::create('investor_tables', function (Blueprint $table) {
            $table->id();
            $table->string("nama_investor");
            $table->string("username_investor");
            $table->string("nama_organisasi_invs");
            $table->string("noTelp_investor");
            $table->string("email_investor");
            $table->string("password_investor");
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
        Schema::dropIfExists('investor_tables');
    }
};

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
        Schema::create('event_tables', function (Blueprint $table) {
            $table->id();
            $table->string("judul_event");
            $table->string("tanggal_pelaksanaan");
            $table->string("tempat_pelaksanaan");
            $table->string("guest_star");
            $table->string("fee_event");
            $table->string("pamflet_event");
            $table->string("kategori_event");
            $table->string("paket_event");
            $table->string("proposal_event");
            $table->string("bukti_pembayaran");
            $table->unsignedBigInteger('organisasi_tables_id');
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
        Schema::dropIfExists('event_tables');
    }
};

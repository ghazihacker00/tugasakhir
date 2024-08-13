<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('email_requests', function (Blueprint $table) {
            $table->id();
            $table->string('kode_tiket')->unique();
            $table->string('nama_lengkap');
            $table->string('nik_nip');
            $table->string('jabatan');
            $table->string('pangkat_golongan_eselon');
            $table->string('dinas_unit_kerja');
            $table->string('instansi');
            $table->string('email_pemohon');
            $table->string('telepon');
            $table->string('alamat');
            $table->string('lampiran')->nullable();
            $table->string('status')->default('new');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('email_requests');
    }
}

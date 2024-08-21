<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiTteRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_tte_requests', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nik_nip');
            $table->string('jabatan');
            $table->string('pangkat_golongan_eselon');
            $table->string('dinas_unit_kerja');
            $table->string('instansi');
            $table->string('email_pemohon');
            $table->string('telepon');
            $table->text('alamat');
            $table->string('surat_permohonan')->nullable();
            $table->string('kode_tiket')->unique();
            $table->string('status')->default('new');
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
        Schema::dropIfExists('api_tte_requests');
    }
}

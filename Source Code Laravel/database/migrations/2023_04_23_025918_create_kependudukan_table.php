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
        Schema::create('kependudukan', function (Blueprint $table) {
            $table->unsignedBigInteger('nik')->primary()->unique();
            $table->string('nama');
            $table->enum('status', ['Kawin', 'Belum Kawin'])->nullable(false)->default('Belum Kawin');
            $table->enum('hubungan', ['Kepala Keluarga', 'Istri','Anak Kandung','Lainnya'])->nullable(false)->default('Kepala Keluarga');
            $table->string('tempat_lahir');
            $table->string('alamat');
            $table->string('usia');
            $table->date('date_of_birth');
            $table->enum('golongan_darah', ['A', 'AB','B','O','Tidak Diketahui'])->nullable(false)->default('A');
            $table->enum('agama', ['Kristen Katolik', 'Islam','Budha','Kong Hucu','Kristen Protestan'])->nullable(false)->default('Islam');
            $table->enum('Jenis_Kelamin', ['Laki-Laki', 'Perempuan'])->nullable(false)->default('Laki-Laki');
            $table->foreignId('kode_keluarga');
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
        Schema::dropIfExists('kependudukan');
    }
};

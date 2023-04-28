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
            $table->id('id_kependudukan');
            $table->string('nama');
            $table->enum('status', ['Kawin', 'Belum Kawin'])->nullable(false)->default('Belum Kawin');
            $table->string('alamat');
            $table->date('date_of_birth');
            $table->enum('agama', ['Kristen Katolik', 'Islam','Budha','Kong Hucu','Kristen Protestan'])->nullable(false)->default('Islam');
            $table->timestamps();
            $table->SoftDeletes();
            
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

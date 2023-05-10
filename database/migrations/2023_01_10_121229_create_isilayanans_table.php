<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsilayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isilayanans', function (Blueprint $table) {
            $table->id('id_isiLayanan');
            $table->string('judul');
            $table->text('isi');
            $table->string('gambar');
            $table->foreignId('id_layanan');
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
        Schema::dropIfExists('isilayanans');
    }
}

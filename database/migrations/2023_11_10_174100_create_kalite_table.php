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
        Schema::create('kalite', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kalitegonderici_id')->constrained('kalitegonderici')->onDelete('cascade');
            $table->foreignId('kalitebildirim_id')->constrained('kalitebildirim')->onDelete('cascade');
            $table->foreignId('birim_id')->constrained('birim')->onDelete('cascade');
            //konu
            $table->string('konu');
            //icerik
            $table->string('icerik');
            //adsoyad
            $table->string('adsoyad');
            //eposta
            $table->string('eposta');
            //telefon
            $table->string('telefon');
            //dosya
            $table->string('dosya');
            //silindi
            $table->boolean('silindi')->default(false);
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
        Schema::dropIfExists('kalite');
    }
};

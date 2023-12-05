<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topluluk', function (Blueprint $table) {
            $table->id();
            $table->string('adi');
            $table->string('aciklama');
            $table->string('fotograf')->nullable();
            //topluluk kullanici adi
            $table->string('kullanici_adi');
            //topluluk sifre
            $table->string('sifre');
            //silindi mi
            $table->boolean('silindi_mi')->default(false);
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
        Schema::dropIfExists('topluluk');
    }
};

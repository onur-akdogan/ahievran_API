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
        Schema::create('duyuru', function (Blueprint $table) {
            $table->id();
            //başlık
            $table->string('baslik');
            //içerik
            $table->string('icerik');
            //foto
            $table->string('fotograf');
            //her duyuruyu bir birim oluşturacak bunun için birim_id foreign key olacak
            $table->foreignId('birim_id')->constrained('birim')->onDelete('cascade');
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
        Schema::dropIfExists('duyuru');
    }
};

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
        Schema::create('etkinlikler', function (Blueprint $table) {
            $table->id();
            $table->string('adi');
            $table->string('icerik');
            $table->string('fotograf');
            //bir etkinliği bir topluluk oluşturabilir bu yüzden bir topluluk oluşturabilir
            $table->foreignId('topluluk_id')->constrained('topluluk')->onDelete('cascade');
            //silindi
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
        Schema::dropIfExists('etkinlikler');
    }
};

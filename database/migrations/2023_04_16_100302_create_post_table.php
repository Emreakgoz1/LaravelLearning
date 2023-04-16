<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string("isim");
            $table->string("soyisim");
            $table->text("yazi");
            $table->string("telefon");
            $table->string("mail");
            $table->string("ipAdresi");
            $table->string("tarayici");
            $table->string("isim");
            $table->string("renk");
            $table->string("image");
            $table->integer("barkod");
            $table->text("adres");
            $table->timestamps();
            //post table migration oluusturduktan sonra 
            //php artisan migrate ettiginde tabloya push edilicek

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};

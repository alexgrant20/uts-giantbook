<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('book_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained()->onUpdate('cascade');
            $table->foreignId('category_id')->constrained()->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('book_category');
    }
};
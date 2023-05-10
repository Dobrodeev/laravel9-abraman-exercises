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
        Schema::create('wheels', function (Blueprint $table) {
            $table->id();
            
            $table->string('article');
            $table->string('brand');
            $table->string('design');
            $table->string('url');
            
            $table->string('b');
            $table->float('d');
            $table->float('z');
            $table->float('pcd');
            $table->float('et');
            $table->float('dia');
            
            $table->integer('price_whole');
            $table->integer('price');
            $table->string('quntity');
            $table->string('origin');
            $table->string('color');
            $table->string('weight');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wheels');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWheelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wheels', function (Blueprint $table) {
            $table->id();
            $table->string('mark');
            $table->string('model');
            $table->string('size_J');
            $table->string('size_x');
            $table->tinyInteger('size_num');
            $table->tinyInteger('mounting_holes');
            $table->float('PCD');
            $table->float('DIA');
            $table->float('ET/HM');
            $table->enum('colour', ['Сріб.', 'Чорн.', 'Сріб.Гібрид']);
            $table->float('weight');
            $table->enum('origin', ['Швейцарія', 'Чехія', 'Узбекистан', 'Німеччина', 'Іспанія', 'Туреччина', 'Турція', 'Індія', 'Бразилія']);
            $table->string('code');
            $table->float('price');
            $table->float('price_plus10');
            $table->float('price_plus100');
            $table->string('availability');
            $table->enum('newness', ['New', 'Новий']);
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
        Schema::dropIfExists('wheels');
    }
}
